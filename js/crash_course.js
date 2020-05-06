course_set = [
  {
    video_link: 'https://www.youtube.com/embed/zpOULjyy-n8?rel=0&enablejsapi=1',
    video_head_name: 'name0',
    head_pop_name: 'How to Log In',
    p_pop_name: 'Brief description about how to logIn to GeNet after creating GeNet account.'
  },
  {
    video_link: 'https://www.youtube.com/embed/E99ZJyrkVXw',
    video_head_name: 'name1',
    head_pop_name: 'GeNet Overview',
    p_pop_name: 'Giving an overview idea about GeNet interface.'
  }  
];
for(var i=1; i<=course_set.length; i++){  
  $('.img_for_course_div').append(
        '<div class="col-md-4 col-sm-6 padleft-right">'+
          '<figure class="imghvr-fold-up">'+
            '<img src="img/crash_course/course_0' + i + '.jpg" class="img-responsive">'+
            '<figcaption>'+
              '<h3>' + course_set[i-1].head_pop_name + '</h3>'+
              '<p>' + course_set[i-1].p_pop_name + '</p>'+
            '</figcaption>'+
            '<a id="' + i + '" class="course_click" data-toggle="modal" data-target="#course_model"></a>'+
          '</figure>'+
        '</div>'
    );
}

$('.course_click').click(function(){
  url_set = course_set[this.id-1].video_link;
  $('.video_iframe_course_model').attr('src', url_set);
  $('.head_name_model').text(course_set[this.id-1].video_head_name);
});

function video_play_close(name_course){
  $('.close_' + name_course).click(function(){
      var leg=$('.video_iframe_' + name_course).attr("src");
      $('.video_iframe_' + name_course).attr("src",leg);
  });
}

video_play_close('course_model');
