const dashboardLink=document.getElementById('dashboard_link');
const historyLink=document.getElementById('history_link');
const patient_link=document.getElementById('patient_link');



const dashboard=document.getElementById('dashboard');
const history=document.getElementById('history');
const footer=document.getElementById('footer');
const patient=document.getElementById('Patienthistory');


window.addEventListener("load", ()=>{

    dashboard.style.display='block';
    history.style.display='none';
    patient.style.display='none';
   
    document.getElementById('preLoader').style.display='none';
});

dashboardLink.addEventListener('click',function(){
    dashboard.style.display='block';
    history.style.display='none';
    patient.style.display='none';
   
    
    
})
historyLink.addEventListener('click',function(){
    history.style.display='block';
    dashboard.style.display='none';
    patient.style.display='none';

    footer.style.marginTop='17rem';
    
})

patient_link.addEventListener('click',function(){
   patient.style.display='block';
history.style.display='none';
    dashboard.style.display='none';

    footer.style.marginTop='10rem';
    
})
//Stop User From going Back

window.history.pushState(null, null, window.location.href);
window.onpopstate = function() {
    window.history.go(1);
};