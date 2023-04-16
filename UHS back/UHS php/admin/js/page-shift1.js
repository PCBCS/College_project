const dashboardLink=document.getElementById('dashboard_link');
const historyLink=document.getElementById('history_link');
// const pescribeLink=document.getElementById('pescribe_link');



const dashboard=document.getElementById('dashboard');
const history=document.getElementById('history');
const footer=document.getElementById('footer');



window.addEventListener("load", ()=>{

    dashboard.style.display='block';
    history.style.display='none';
  
   
    document.getElementById('preLoader').style.display='none';
});

dashboardLink.addEventListener('click',function(){
    dashboard.style.display='block';
    history.style.display='none';
    
   
    
    
})
historyLink.addEventListener('click',function(){
    history.style.display='block';
    dashboard.style.display='none';
   

    footer.style.marginTop='17rem';
    
})

//Stop User From going Back

window.history.pushState(null, null, window.location.href);
window.onpopstate = function() {
    window.history.go(1);
};