$(document).ready(function(){
    $('#file-upload').change(function(e){
        $('#avatar').attr('src','../img/'+e.target.files[0].name);
    })
})
