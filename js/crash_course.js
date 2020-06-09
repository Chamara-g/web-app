course_set = [
  {
    video_link: 'https://www.youtube.com/embed/Az3H-C06KZI',
    video_head_name: 'Genet Login | Gene Expression Analysis Tool',
    head_pop_name: 'How to Log In',
    p_pop_name: 'Brief description about how to logIn to GeNet after creating GeNet account.'
  },
  {
    video_link: 'https://www.youtube.com/embed/CrHFDtG1gtA',
    video_head_name: 'Introduction to GeNet | Gene Expression Analysis Tool | GeNet',
    head_pop_name: 'GeNet Overview',
    p_pop_name: 'Giving an overview idea about GeNet interface.'
  },
  {
    video_link: 'https://www.youtube.com/embed/J3tJJe2vaDg',
    video_head_name: 'Input File Format | Gene Expression Analysis Tool | GeNet',
    head_pop_name: 'Input File Format',
    p_pop_name: 'Brief description about input file format.'
  },
  {
    video_link: 'https://www.youtube.com/embed/srKF5uI118A',
    video_head_name: 'Visualization | Gene Expression Analysis Tool | GeNet',
    head_pop_name: 'Visualization',
    p_pop_name: 'Overview idea about Visualization tab.'
  },
  {
    video_link: 'https://www.youtube.com/embed/eQtyXStrpvw',
    video_head_name: 'Preprocess Part 1| Annotation Table Mapping | GeNet',
    head_pop_name: 'Preprocess Part 1',
    p_pop_name: 'Steps perform in Preprocessing (Annotation Table Mapping) part.'
  },
  {
    video_link: 'https://www.youtube.com/embed/ruheCB0gFzg',
    video_head_name: 'Preprocess Part 2 | Normalization & Imputation | GeNet',
    head_pop_name: 'Preprocess Part 2',
    p_pop_name: 'Steps perform in Preprocessing (Normalization & Imputation) part.'
  },
  {
    video_link: 'https://www.youtube.com/embed/aoImwUSX-ik',
    video_head_name: 'Preprocess Part 3 | Feature Reduction | GeNet',
    head_pop_name: 'Preprocess Part 3',
    p_pop_name: 'Steps perform in Preprocessing (Feature Reduction) part.'
  },
  {
    video_link: 'https://www.youtube.com/embed/Qu-5a5RZC5I',
    video_head_name: 'Feature Selection | Gene Expression Analysis Tool | GeNet',
    head_pop_name: 'Feature Selection',
    p_pop_name: 'Overview idea about the Feature Selection.'
  },
  {
    video_link: 'https://www.youtube.com/embed/7Ja_r5dsIX0',
    video_head_name: 'Analysis | Gene Expression Analysis Tool | GeNet',
    head_pop_name: 'Analysis',
    p_pop_name: 'Overview idea about the Analysis tab.'
  },
  {
    video_link: 'https://www.youtube.com/embed/wjls7VMtehM',
    video_head_name: 'Validation | Gene Expression Analysis Tool | GeNet',
    head_pop_name: 'Validation',
    p_pop_name: 'Overview idea about the Validation tab.'
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
