if(window.location.search.length < 4) {
  const postForm = document.getElementsByTagName('form')[0];
  const postInput = postForm.getElementsByTagName('input');
  const postTextArea = postForm.getElementsByTagName('textarea')[0];
  postInput[0].value = '';
  postInput[1].value = '';
  postTextArea.value = '';
}

const checkInputs = function(){
  const postForm = document.getElementsByTagName('form')[0];
  const postInput = postForm.getElementsByTagName('input');
  const postTextArea = postForm.getElementsByTagName('textarea')[0];
  if(postInput[0].value.length > 0 && postInput[1].value.length > 0 && postTextArea.value.length > 0){
    enableButtons();
  } else {
    disableButtons();
  }
}
const enableButtons = function(){
  const postSubmit = document.getElementsByClassName('post-submit')[0];
  postSubmit.className = 'button-1 post-submit';
}
const disableButtons = function(){
  const postSubmit = document.getElementsByClassName('post-submit')[0];
  postSubmit.className = 'button-1 post-submit disabled';
}

postInput[0].addEventListener('keyup',function(){
  checkInputs();
});
postInput[1].addEventListener('keyup',function(){
  checkInputs();
});
postTextArea.addEventListener('keyup',function(){
  checkInputs();
});
postSubmit.addEventListener('click',function(e){
  if(checkInputs()){
    e.preventDefault();
  }
})
checkInputs();
