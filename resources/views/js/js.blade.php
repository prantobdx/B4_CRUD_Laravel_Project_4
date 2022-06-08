@extends('master')

@section('title')
Java Script
@endsection

@section('body')


@include('includes/image-change')

@include('includes/color-change')

<h1 id="h1"></h1>

<div id="content"></div>


<script>

//work-day-33..................



var name = 'jenifer'; //single variable

//document.write(name + '<br/>');


var data = [10,20,30]; //array



for (key in data)
{
   //document.write(data[2]+'<br/>');
}


 
//object..............

//  var country ='BD';
//  var city = "dhaka";
//  var area ='syamoli';

//  var location = {country:'BD',city:'Dhaka',area:'stamoli'};

//  var student = {name:'santo',phone:'01836546843',email:'santo@santovaya.com'};

 var students = [
    {name:'Santo',phone:'0135463733', email:'santo@fashol.com'},
    {name:'Arif',phone:'0135463733',  email:'arif@bikroy.com'},
    {name:'Jerin',phone:'0135463733', email:'jerin@daraz.com'} ,
    {name:'Pulok',phone:'0135463733', email:'pulok@gmail.com'} ,
    {name:'Bulbul',phone:'0135463733', email:'bulbul@gmail.com'} ,
    {name:'Prottoy',phone:'0135463733', email:'Prottoy@gmail.com'}
 ];

//  document.write(students[3].email);


for (index in students)
{
   document.write('student-name :'+ students[index].name +' '+ 'student-phone :'+ students[index].phone +' '+ 'student-email:' + students[index].email + '<br>');
}


</script>





<script>

// function......................
//Work-Day-32

function createDiv(height,width,color)
{
   var my = document.createElement('div');
   my.style.height = height+'px';
   my.style.width = width+'px';
   my.style.backgroundColor = color;
   my.style.float = 'left';
   my.setAttribute('id', 'colorDiv');
   
   // console.log(div);
   var content = document.getElementById('content');
   content.append(my);
}

// createDiv(300,400,'blue');
// createDiv(200,100,'green');
// createDiv(300,150,'gray');
// createDiv(500,300,'black');



// var firstName = 'Shawon';
// var lastName = 'Akter';

function printName()
{
   document.write(firstName+' '+lastName);
}

// printName();


// getResult(10,2);

function getResult(firstNumber,lastNumber)
{
   document.write(firstNumber + lastNumber+'<br>');
}

// getResult(100,50);

// getResult('Hello','Dhaka');



function getFullName(firstName, lastName)
{
   var fullName = firstName + ' '+lastName+'<br>';

   var h1Element = document.getElementsByTagName('h1')[0];

   // var h1Element = document.getElementById('h1');

   h1Element.innerHTML = fullName;
}

// getFullName("Habibur","Rahman")




//  function name() 
//  {
//    //  document.write('Tarek');
//    alert('hello world');
//  }

//  name();


//...........................


   //array..................
   // var data = ['shila','sadia',false,100,10.25,true,'bitm','bangladesh',200,25.30];

   // document.write(data.length+'<br>');

   // for (key in data)
   // {
   //    if (data[key] == 'bangladesh')
   //    {
   //       document.write(key +'<br>');
   //    }

      // document.write(data[key] + '<br>');
      // document.write(key+'<br>')
   // }

   // document.write(data[16]);

   //............................

   //Variable....................

    // var firstName = 'sanjida';
    // var lastName = 'Akter';

    // document.write(firstName+ ' &nbsp;&nbsp;&nbsp;' +lastName);

    // document.write(typeof'Hello World');


   //major rules for variable
      // *start with verb
      //a-z, A-Z, 0-9, $
      // no number in first

     
    //   var Bangladesh = 'Hello bangladesh';
    //   var arif_name = 'His name is arif';
    //   var hellojenifer = "Hello jenifar";
    //   var crSaheb = "Sudipto Saha";

    //     var firstNumber = 10;
    //     var bitm = 'bitm';
    //     var price = 100.00;


    //   document.write(typeof('firstNumber'));

   //...........................

</script>


@endsection


