
const lip = document.getElementsByClassName('lip');
if(lip.length > 0){
  const lipExit = lip[0].getElementsByClassName('lip-exit')[0];
  lipExit.addEventListener('click',function(){
    lip[0].className = lip[0].className.replace(' active','');
  })
}
