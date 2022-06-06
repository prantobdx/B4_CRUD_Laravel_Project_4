
<style>

    .small-image
    {
        height: 100px!important;
        width: 100px!important;
        cursor: pointer;
    }

</style>



<div class="ml-5 mt-3" style="height: 400px; width:600px!important">
    <img src="{{ asset('assets/img/p4.jpg') }}" id="mainImage" alt="" class="img-fluid h-100">
</div>

<div class="ml-5 mt-3">
    <img src="{{ asset('assets/img/p2.jpg') }}" alt="" class="small-image mr-3" id="samllImage1">
    <img src="{{ asset('assets/img/p3.jpg') }}" alt="" class="small-image mr-3" id="samllImage2">
    <img src="{{ asset('assets/img/p1.jpg') }}" alt="" class="small-image mr-3" id="samllImage3">
    <img src="{{ asset('assets/img/p5.jpg') }}" alt="" class="small-image mr-3" id="samllImage4">

</div>

<script>
var samllImage1 = document.getElementById('samllImage1');

var mainImage = document.getElementById('mainImage');

samllImage1.onclick = function () 
{
    var imgUrl = samllImage1.getAttribute('src');
    mainImage.setAttribute('src',imgUrl);   
}

var samllImage2 = document.getElementById('samllImage2');
samllImage2.onclick = function () 
{
    var imgUrl = samllImage2.getAttribute('src');
    mainImage.setAttribute('src',imgUrl);   
}

var samllImage3 = document.getElementById('samllImage3');
samllImage3.onclick = function () 
{
    var imgUrl = samllImage3.getAttribute('src');
    mainImage.setAttribute('src',imgUrl);   
}

var samllImage4 = document.getElementById('samllImage4');
samllImage3.onclick = function () 
{
    var imgUrl = samllImage4.getAttribute('src');
    mainImage.setAttribute('src',imgUrl);   
}

</script>