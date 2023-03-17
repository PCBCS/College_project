//initialization of all elements


// preloader

preloader=()=>{
    document.getElementById('loader').style.display='none'
}






//date & time

date=()=>{
              let date=new Date();
let day_value=date.getDate();
let month_value=date.getMonth();
let yearvalue=date.getFullYear();

 let  month_arr=['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November','Decembe'];
if(day_value<10)
{
    day_value='0'+day_value;
}

       document.getElementById('day').innerHTML=day_value;
       document.getElementById('month').innerHTML=month_arr[month_value];
       document.getElementById('year').innerHTML=yearvalue;
















}






setInterval(() => {
   let hour = document.getElementById('hour');
   let minute = document.getElementById('minute');
   let second = document.getElementById('second');
   let period=document.getElementById('period');
  

   let time = new Date();
   hour_value=time.getHours();
   minute_value=time.getMinutes();
   second_value=time.getSeconds();

//    for hour setup
if(
    hour_value>12
){

    hour_value-=12
    period.innerHTML='PM'

}
else{
    period.innerHTML='AM'
}

if(hour_value<10)
{
    hour_value='0'+hour_value
}



// for minute
if(minute_value<10)
{
    minute_value='0'+ minute_value;
}
// for second
if(second_value<10)
{
    second_value='0'+ second_value;
}






hour.innerHTML=hour_value;
minute.innerHTML=minute_value;
second.innerHTML=second_value;






}, 1000);











//setting option

open_setting=()=>{
    document.getElementById('setting_area').style.display="block";
   }
close_setting=()=>{
    document.getElementById('setting_area').style.display="none";
   }






//dahboard Area  active status


select_link=(id_value)=>{
    document.getElementById(id_value).classList.add("active");
    if (id_value == "dashboard") {
        document.getElementById('history').classList.remove("active");
        document.getElementById('hospital').classList.remove("active");
        document.getElementById('doctor').classList.remove("active");
        
        document.getElementById('dashboard_data').style="display:block";
        document.getElementById('history_data').style="display:none";
        document.getElementById('doctor_data').style="display:none";
             
        document.getElementById('hospital_data').style="display:none";

    }
    else if (id_value == "history") {
        document.getElementById('dashboard').classList.remove("active");
        document.getElementById('hospital').classList.remove("active");
        document.getElementById('doctor').classList.remove("active");
        document.getElementById('dashboard_data').style="display:none";
        document.getElementById('history_data').style="display:block";
    
        document.getElementById('dashboard_data').style="display:none";
        document.getElementById('doctor_data').style="display:none";
             
        document.getElementById('hospital_data').style="display:none";

    }
    else if (id_value == "hospital") {
        document.getElementById('history').classList.remove("active");
        document.getElementById('dashboard').classList.remove("active");
        document.getElementById('doctor').classList.remove("active");

        document.getElementById('doctor_data').style="display:none";
    
        document.getElementById('dashboard_data').style="display:none";
        document.getElementById('history_data').style="display:none";
        
        document.getElementById('hospital_data').style="display:block";

    }
    else if (id_value == "doctor") {
        document.getElementById('history').classList.remove("active");
        document.getElementById('hospital').classList.remove("active");
        document.getElementById('dashboard').classList.remove("active");
        document.getElementById('doctor_data').style="display:block";
    
        document.getElementById('dashboard_data').style="display:none";
        document.getElementById('history_data').style="display:none";
        
        document.getElementById('hospital_data').style="display:none";

    }

    

    // document.getElementById().classList.remove("active");




}

//for  table animation
document.getElementById("go_btn").addEventListener('click',function(

){
    document.getElementById('table_doctor_avalibiality').style.display='block'
})


//log out button

document.getElementById('logout').addEventListener('click',function(){
    window.open('./log_out.html','_self')
})


// for stop log in back
