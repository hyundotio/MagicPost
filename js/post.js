const postForm = document.getElementsByTagName('form')[0];
const postInput = postForm.getElementsByTagName('input');
const postTextArea = postForm.getElementsByTagName('textarea')[0];
const postSubmit = document.getElementsByClassName('post-submit')[0];
postInput[0].value = '';
postInput[1].value = '';
postTextArea.value = '';
postInput[0].addEventListener('keyup',function(){
  if(postInput[0].value.length > 0 && postInput[1].value.length > 0 && postTextArea.value.length > 0){
    postSubmit.className = 'button-1 post-submit';
  } else {
    postSubmit.className = 'button-1 post-submit disabled';
  }
});
postInput[1].addEventListener('keyup',function(){
  if(postInput[0].value.length > 0 && postInput[1].value.length > 0 && postTextArea.value.length > 0){
    postSubmit.className = 'button-1 post-submit';
  } else {
    postSubmit.className = 'button-1 post-submit disabled';
  }
});
postTextArea.addEventListener('keyup',function(){
  if(postInput[0].value.length > 0 && postInput[1].value.length > 0 && postTextArea.value.length > 0){
    postSubmit.className = 'button-1 post-submit';
  } else {
    postSubmit.className = 'button-1 post-submit disabled';
  }
});
postSubmit.addEventListener('click',function(e){
  if(this.className.search('disabled') > -1){
    e.preventDefault();
  }
})
