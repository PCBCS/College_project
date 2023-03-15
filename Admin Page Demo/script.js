
    //for time
    setInterval(() => {


        let hour = document.getElementById('hour');
        let minute = document.getElementById('minute');
        let second = document.getElementById('second');
        let period = document.getElementById('period');


        // getting date from browser

        let datetime = new Date();
        hour_value = datetime.getHours();
        minute_value = datetime.getMinutes();
        second_value = datetime.getSeconds();






        if (hour_value >= 12) {
            period.innerHTML = "PM"
        }
        else {
            period.innerHTML = "AM"
        }

        if (hour_value > 12) {
            hour_value -= 12;
          
        }
if(hour_value<10)
{
    hour_value = '0' + hour_value;
}
else{
    hour_value;
}
        

        hour.innerHTML = hour_value;
        minute.innerHTML = minute_value;
        second.innerHTML = second_value;








    }, 1000);






    function selecting_animation(id_value) {
        document.getElementById(id_value).classList.add("active");
        if (id_value == "dashboard") {
            document.getElementById('history').classList.remove("active");
            document.getElementById('hospital').classList.remove("active");
            document.getElementById('doctor').classList.remove("active");
            document.getElementById('table_data').style="display:none";
            document.getElementById('dashboard_data').style="display:block";
        }
        else if (id_value == "history") {
            document.getElementById('dashboard').classList.remove("active");
            document.getElementById('hospital').classList.remove("active");
            document.getElementById('doctor').classList.remove("active");
            document.getElementById('table_data').style="display:block";
        
            document.getElementById('dashboard_data').style="display:none";
        }
        else if (id_value == "hospital") {
            document.getElementById('history').classList.remove("active");
            document.getElementById('dashboard').classList.remove("active");
            document.getElementById('doctor').classList.remove("active");
        }
        else if (id_value == "doctor") {
            document.getElementById('history').classList.remove("active");
            document.getElementById('hospital').classList.remove("active");
            document.getElementById('dashboard').classList.remove("active");
        }

        else {

        }

        // document.getElementById().classList.remove("active");




    }










