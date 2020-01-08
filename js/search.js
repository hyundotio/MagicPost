const searchButton = document.getElementsByClassName('search-button')[0];
const searchBar = document.getElementsByClassName('search-bar')[0];
const urlParams = new URLSearchParams(window.location.search);
const searchParam = urlParams.get('search');
const resultThead = document.getElementById('result-thead');
const mobileSortToggle = document.getElementsByClassName('mobile-sort-toggle')[0];

if(searchParam.length > 0){
  searchBar.value = searchParam;
}
searchBar.addEventListener('keyup',function(){
  if(this.value.length > 0){
    searchButton.className = 'search-button';
  } else {
    searchButton.className = 'search-button disabled';
  }
})
searchButton.addEventListener('click',function(e){
  if(searchBar.value.length == 0 && this.className != 'search-button'){
    e.preventDefault();
  }
})
if(mobileSortToggle){
  mobileSortToggle.addEventListener('click',function(e){
    if(resultThead.className == 'mobile-sort-hidden'){
      resultThead.className = '';
    } else {
      resultThead.className = 'mobile-sort-hidden';
    }
  })
}
