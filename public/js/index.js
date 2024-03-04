var paginate = 1;
var dataExplore =[];
loadMoreData(paginate);
$(window).scroll(function(){
    if($(window).scrollTop() + $(window).height() >= $(document).height()){
        paginate++;
        loadMoreData(paginate);
    }
})

function loadMoreData(paginate){
    $.ajax({
        url: window.location.origin +'/getDataExplore/'+ '?page'+paginate,
        type: "GET",
        dataType: "JSON",
        success: function(e){
            console.log(e)
            e.data.data.map((x)=>{
                let datanya = {
                    id: x.id,
                    judul: x.judul_foto,
                    deskripsi: x.deskripsi ,
                    foto: x.lokasi_foto,
                    tanggal: x.created_at
                }
                dataExplore.push(datanya)
            })
            getExplore()
        },
        error: function(jqXHR, textStatus, errorThrown){

        }
    })
}

const getExplore =()=>{
    $('#exploredata').html('')
    dataExplore.map((x,i)=>{
        $('#exploredata').append(
            `
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="/img/${x.foto}" alt="Image" class="img-fluid">                   
            </figure>
            <div class="d-flex justify-content-between tm-text-black">
                <span class="tm-text-gray-black">${x.judul}</span>
                <span><i class="bi bi-heart"></i> <i class="bi bi-chat-dots"></i></span>
            </div>
            <div>
            <span class="tm-text-black">${x.tanggal}</span>
            </div>
            </div> 
            `
        )
    })
}