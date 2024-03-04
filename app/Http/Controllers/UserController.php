<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Like;
use App\Models\User;
use App\Models\Album;
use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['email' =>$request->email, 'password' =>$request->password])){
            $request->session()->regenerate();
            return redirect('/index2')->with('success', 'Login Berhasil');  
    	}else{
            return redirect()->back(); 
    	}
        
    }

    public function register(Request $request){
       
        $pesan = [
         'text_email.required'   => 'email Tidak Boleh Kosong',
         'text_email.unique'     =>  'email Sudah Terpakai',
         'text_password.required'=> 'password minimal 8 karakter'  
         ];
         //Validasi
     $request -> validate ([
         'text_nama_lengkap'   => 'required',
         'text_email'          => 'required|unique:users,email',
         'text_password'       => 'required|string|min:8',
     ],$pesan);
         //Proses Simpan
         $dataUser = [
             'nama_lengkap' => $request->text_nama_lengkap,
             'email'        => $request->text_email,
             'password'     =>  bcrypt($request->text_password),
             'foto_profile' => 'users.png' 
             ];
             User::create($dataUser);
             return redirect('/sign_up')->with('success', 'Registrasi Berhasil');  
     }

     public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerate();
        return  redirect('/index')->with('success', 'Anda Berhasil Logout');
     }

     public function upload_foto(Request $request){
        $request->validate([
            'foto' => 'required|mimes:jpeg,jpg,png',
            'judul'=> 'required',
            'deskripsi' => 'required'
        ]);

        $foto_file = $request->file('foto');
        $foto_ektensi = $foto_file->extension();
        $foto_nama = date('ymdhis') .".". $foto_ektensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        $data = [
            'lokasi_foto' => $foto_nama,
            'judul_foto'  => $request->input('judul'),
            'deskripsi'   => $request->input('deskripsi'),
            'album_id'    => $request->input('album'),
            'users_id'    => Auth::user()->id
        ];

        Foto::create($data);
        return redirect('/upload')->with('success', 'Foto Berhasil Di Upload');
     }

     public function detail(Request $request, $id){
        $posts = Foto::all();
        $detail = Foto::find($id);
        $name = User::where('id', auth()->user()->id)->get();
        $user = User::find($detail->users_id);
        $komen = Komentar::with('user')->where('foto_id', $id)->get();
        return view('detail', compact('detail', 'user','posts','name','komen'));
     }

     public function buat_album(Request $request){
        $request->validate([
            'nama_album' => 'required',
            'deskripsi'=> 'required'
        ]);

        $data = [
            'nama_album'  => $request->input('nama_album'),
            'deskripsi'   => $request->input('deskripsi'),
            'users_id'    => Auth::user()->id,
        ];

        Album::create($data);
    return redirect('/buatalbum')->with('success', 'Album berhasil Di Buat');
    }

    public function ubahpassword(Request $request){
        //cek password lama 
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back();
        }
        if($request->new_password != $request->repeat_password){
            return back();
        }

        auth()->user()->update([
            'password' => Hash::make($request->new_password) 
        ]);

        return back()->with('success', 'Password Anda Berhasil Di Ubah');
    }

    public function search(Request $request){
        $keyword = $request->search;
            $results = Foto::where('judul_foto','LIKE','%'.$keyword.'%')->get();
      
        return view('index-search', [
            'keyword' => $keyword,
            'posts'   => $results
        ]);
    }

    public function editprofile(Request $request){
        $foto_file = $request->file('foto_profile');
        $foto_ektensi = $foto_file->getClientOriginalName();
        $foto_nama = date('ymdhis') .".". $foto_ektensi;
        $foto_file->move(public_path('foto_profile'), $foto_nama);

        $data = [
            'foto_profile' => $foto_nama, 
            'nama_lengkap' =>$request->nama_lengkap, 
            'alamat'  => $request->alamat,
            'bio'   => $request->bio,
        ];
        $user = auth()->user();

        User::find($user->id)->update($data);
        return redirect('/updateprofil')->with('success', 'Anda Berhasil Mengubah Profil');
    }

    public function komen(Request $request){
        $datakomen = [
            'users_id'=> Auth::user()->id,
            'foto_id' => $request->input('foto_id'),
            'isi_komentar' => $request->isi_komen,
         ];

         Komentar::create($datakomen);
         return back();
    }

    public function updatepos(Request $request, $id){
        $foto = Foto::findorfail($id);
        $data_foto = [
            'judul_foto'  => $request->judul_baru,
            'deskripsi'   => $request->deskripsi_baru,
        ];
        $foto->update($data_foto);
        return redirect()->back()->with('success', 'Anda Berhasil Mengubah Postingan');
    }

    public function deleteFoto($id){
        $post = Foto::find($id);
        $post->delete();
        return redirect('profil')->with('success', 'Anda Berhasil Menghapus Postingan');  
    }

    public function deleteAlbum($id){
        $post = Album::find($id);
        $post->delete();
        return redirect('profil')->with('success', 'Anda Berhasil Menghapus Album');  
    }

    public function likefoto(Request $request){
        $idfoto = $request->foto_id;
        $liked = Like::where('foto_id', $idfoto)->where('users_id', auth()->id())->exists();
        if($liked){
            Like::where('foto_id', $idfoto)->where('users_id', auth()->id())->delete();
            return redirect()->back()->with('success', 'kamu unlike');
        }else{
            Like::create([
                'foto_id' => $idfoto,
                'users_id' => auth()->id()
            ]);
            return redirect()->back()->with('success', 'Like berhasil');
        }
    }
}


