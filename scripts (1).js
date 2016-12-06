  $(function(){
   $("#footballfeed").hide();
  $("#football").on("click", function(){
       $("#uncfeed1, #footballfeed").toggle();
       //$("#uncfeed1").toggle();
  });
  $("#football").on("click", function(){
       $("#trubiskyfeed").hide();
       $("#uncfeed1").hide();
  });
  $("#football").on("click", function(){
       $("#hoodfeed").hide();
       $("#uncfeed1").hide();
  });
  $("#football").on("click", function(){
       $("#weilerfeed").hide();
       $("#uncfeed1").hide();
  });
 $("#football").on("click", function(){
       $("#loganfeed").hide();
       $("#uncfeed1").hide();
  });
 
      $("#football").on("click", function(){
       $("#switzerfeed").hide();
       $("#uncfeed1").hide();
  });
 
});

  $(function(){
   $("#switzerfeed").hide();
  $("#switzer").on("click", function(){
       $("#uncfeed1, #switzerfeed").toggle();
       //$("#uncfeed1").toggle();
  });
  $("#switzer").on("click", function(){
       $("#trubiskyfeed").hide();
       $("#uncfeed1").hide();
  });
  $("#switzer").on("click", function(){
       $("#hoodfeed").hide();
       $("#uncfeed1").hide();
  });
 $("#switzer").on("click", function(){
       $("#weilerfeed").hide();
       $("#uncfeed1").hide();
  });
 $("#switzer").on("click", function(){
       $("#loganfeed").hide();
       $("#uncfeed1").hide();
  });
       $("#switzer").on("click", function(){
       $("#footballfeed").hide();
       $("#uncfeed1").hide();
  });
 
});
  
   
   
      $(function(){
    $("#trubiskyfeed").hide(); 
     $("#trubisky").on("click", function(){
        $("#uncfeed1, #trubiskyfeed").toggle();
    });
       $("#trubisky").on("click", function(){
       $("#switzerfeed").hide();
       $("#uncfeed1").hide();
  });
  $("#trubisky").on("click", function(){
       $("#hoodfeed").hide();
       $("#uncfeed1").hide();
  });
 $("#trubisky").on("click", function(){
       $("#weilerfeed").hide();
       $("#uncfeed1").hide();
  });
 $("#trubisky").on("click", function(){
       $("#loganfeed").hide();
       $("#uncfeed1").hide();
  });
        $("#trubisky").on("click", function(){
       $("#footballfeed").hide();
       $("#uncfeed1").hide();
  });
});
   
   
         $(function(){
    $("#hoodfeed").hide(); 
     $("#hood").on("click", function(){
        $("#uncfeed1, #hoodfeed").toggle();
    });
       $("#hood").on("click", function(){
       $("#switzerfeed").hide();
       $("#uncfeed1").hide();
  });
  $("#hood").on("click", function(){
       $("#trubiskyfeed").hide();
       $("#uncfeed1").hide();
  });
 $("#hood").on("click", function(){
       $("#weilerfeed").hide();
       $("#uncfeed1").hide();
  });
 $("#hood").on("click", function(){
       $("#loganfeed").hide();
       $("#uncfeed1").hide();
  });
        $("#hood").on("click", function(){
       $("#footballfeed").hide();
       $("#uncfeed1").hide();
  });
});
         
      $(function(){
    $("#weilerfeed").hide(); 
     $("#weiler").on("click", function(){
        $("#uncfeed1, #weilerfeed").toggle();
    });
            $("#weiler").on("click", function(){
       $("#switzerfeed").hide();
       $("#uncfeed1").hide();
  });
  $("#weiler").on("click", function(){
       $("#trubiskyfeed").hide();
       $("#uncfeed1").hide();
  });
 $("#weiler").on("click", function(){
       $("#hoodfeed").hide();
       $("#uncfeed1").hide();
  });
 $("#weiler").on("click", function(){
       $("#loganfeed").hide();
       $("#uncfeed1").hide();
  });
        $("#weiler").on("click", function(){
       $("#footballfeed").hide();
       $("#uncfeed1").hide();
  });
});


      $(function(){
    $("#loganfeed").hide(); 
     $("#logan").on("click", function(){
        $("#uncfeed1, #loganfeed").toggle();
    });
                 $("#logan").on("click", function(){
       $("#switzerfeed").hide();
       $("#uncfeed1").hide();
  });
  $("#logan").on("click", function(){
       $("#hoodfeed").hide();
       $("#uncfeed1").hide();
  });
 $("#logan").on("click", function(){
       $("#weilerfeed").hide();
       $("#uncfeed1").hide();
  });
 $("#logan").on("click", function(){
       $("#trubiskyfeed").hide();
       $("#uncfeed1").hide();
  });
        $("#logan").on("click", function(){
       $("#footballfeed").hide();
       $("#uncfeed1").hide();
  });
});
      
      function getNYTImesTopStoriesData(){
console.log("getNYTImesTopStoriesData()");
var url = "https://api.nytimes.com/svc/topstories/v2/sports.json";
url += '?' + $.param({
  'api-key': "e5c038f5bc9045ac911ef0e03ce1392a"
});
$.ajax({
  url: url,
  method: 'GET',
}).done(function(result) {
  console.log(result);
  displayTopStories(result);
}).fail(function(err) {
  throw err;
});

}

function displayTopStories(data) {

var topStories = data.results;
var html1 = "";
$.each(topStories,function(i, data) {
    console.log(data);
     if (data.multimedia.length >= 1) {
        var imageSrc = '<div class="col-md-4 col-sm-12"><img src="' + data.multimedia[0].url + '"></div>';
    } else{
          var imageSrc = '<div class="col-md-4" col-sm-12></div>';
    }
    


    html1 += '<div class="toptimes">';
    html1 += '<div class="col-md-3 col-sm-12 header">' + imageSrc + '<div class="col-md-8 col-sm-12"><a href="' + data.url + '"><h4>' + data.title + '</h4></a></div>';
    html1 += '</br>';
    html1 += '<p>' + data.abstract + '</p>';
    html1 += '</div>';


});

$("#top-stories-results").append(html1);

}
getNYTImesTopStoriesData();