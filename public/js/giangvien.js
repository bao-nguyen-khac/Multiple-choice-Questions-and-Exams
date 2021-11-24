$(document).ready(function () {
    $(document).on('click','.__btn-delete',function(){
        var id = $(this).data('cauhoi_id')
        var monhoc_id = $(this).data('monhoc_id')
        a = document.querySelector('.action-delete');
        a.href = "./GVPTController/xoacauhoi/" + id + "/" + monhoc_id
        console.log("./GVPTController/xoacauhoi/" + id + "/" + monhoc_id)
    })
})