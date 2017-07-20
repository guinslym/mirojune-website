<style>
  * { box-sizing: border-box; }

$margin-size: 1%;

.toggle-bar {
  // clearfix to allow toggle icons floated right
  display: none;
}

.icon {
  float: right;
  width: 5%;
  margin-left: $margin-size;
  border-bottom: 1px solid #fff;
  
  &:hover {
    border-bottom: 1px solid #9e9e9e;
  }
  
  svg { width: 100%; }
}

.container {
  max-width: 60%;
  margin: $margin-size * 5 auto;
}

.flex {
  display: flex;
  flex-wrap: wrap;
}

img { 
  display: block;
  width: 100%; 
}

.image { 
  flex: 1 0 100px;
  margin: 0 $margin-size $margin-size 0;
}

.layout {
  @extend .layout--list;
  
  &--list {
    .image--2, .image--3, .image--3-of-5, .image--2-of-5 { flex-basis: 100%; }
  }
  
  &--collage {
    .image--2 { flex-basis: 50 - $margin-size; }
    .image--3 { flex-basis: 33 - $margin-size; }
    .image--3-of-5 { flex-basis: 60 - $margin-size; }
    .image--2-of-5 {
      flex-basis: 40 - $margin-size;
      position: relative;
      overflow: hidden;

      img { 
        position: absolute;
        height: 100%; 
        width: auto;
      }
    }
  }
}

@media screen and (min-width: 600px) {
  .toggle-bar { 
    display: inline-block; 
    width: 100%;
    content: "";
    position: relative;
    clear: both;
    margin-bottom: $margin-size;
  }
}
</style>
<div class="container">
  <div class='toggle-bar'>
    <a class='icon icon--toggle' href="#" id="toggle-list"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path fill="#9E9E9E" d="M15 5h70v26.5H15z"/><g fill="none" stroke="#9E9E9E" stroke-miterlimit="10"><path stroke-width="2" d="M29 36h42"/><path d="M38 38.5h21M38 40.5h21M38 42.5h21"/></g><g><path fill="#9E9E9E" d="M15 57h70v26.5H15z"/><g fill="none" stroke="#9E9E9E" stroke-miterlimit="10"><path stroke-width="2" d="M29 89h42"/><path d="M38 91.5h21M38 93.5h21M38 95.5h21"/></g></g></svg></a>
    <a class='icon icon--toggle' href="#" id="toggle-collage"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path fill="#9E9E9E" d="M0 0h63.3v30H0zm68.3 0H100v30H68.3zM0 35h30v30H0zm70 0h30v30H70zm-35 0h30v30H35zM0 70h47.5v30H0zm52.5 0H100v30H52.5z"/></svg></a>
  </div>
  <div id='layout' class="flex layout">
    <div class="image image--2"><img src="https://farm8.staticflickr.com/7593/16361634194_7338ac1634_z.jpg" alt="" /></div>
    <div class="image image--2"><img src="https://farm8.staticflickr.com/7593/16361634194_7338ac1634_z.jpg" alt="" /></div>
    <div class="image image--3"><img src="https://farm8.staticflickr.com/7593/16361634194_7338ac1634_z.jpg" alt="" /></div>
    <div class="image image--3"><img src="https://farm8.staticflickr.com/7593/16361634194_7338ac1634_z.jpg" alt="" /></div>
    <div class="image image--3"><img src="https://farm8.staticflickr.com/7593/16361634194_7338ac1634_z.jpg" alt="" /></div>
    <div class="image image--2-of-5"><img src="https://farm8.staticflickr.com/7593/16361634194_7338ac1634_z.jpg" alt="" /></div>
    <div class="image image--3-of-5"><img src="https://farm8.staticflickr.com/7593/16361634194_7338ac1634_z.jpg" alt="" /></div>
  </div>
</div>

<script>
jQuery(document).ready(function(){
  
  // adds cls1 and removes cls2
function swap_class(el, cls1, cls2) {
  console.log('swapping classes: ', cls1, cls2);
  $(el).addClass(cls1);
  $(el).removeClass(cls2);
}


$('#toggle-list').click(function() {
  console.log('toggle-list');
  swap_class('#layout', 'layout--list', 'layout--collage');
});

$('#toggle-collage').click(function() {
  console.log('toggle-layout');
  swap_class('#layout', 'layout--collage', 'layout--list').bind(this)();
});

  });
</script>