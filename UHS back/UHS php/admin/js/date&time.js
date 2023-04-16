
const time=document.getElementById('time_display');
const date=document.getElementById('date_display');

    //DATE & TIME FUNCTION
    updateDateTime=()=>{
        let date_time=new Date();
        let date_val=date_time.toLocaleDateString();
        let time_val=date_time.toLocaleTimeString();
        time.innerHTML=time_val;
        date.innerHTML=date_val;
        
    }
updateDateTime();
setInterval(updateDateTime,1000);

   

    
