
$(document).ready(function(){
  //Color Changing
  $(".colortab").click(function()
  {
    $(this).parent('li').find('.changed').each(function(index))
    {
      var back = ["#73b8bf","#91bf4b",'#c15c5c'];
      var rand = back[Math.floor(Math.random() * back.length)];

      $(this).css("background" , rand);
      var ID = $(this).parent().attr("id");

      $.ajax(
      {
        method: 'POST',
        url: 'data.php',
        data: 
        {
          ajax: 1,
          Color: rand,
          id : ID,
        },
        success: function(res)
        {
        console.log('Color', res)
        }
      });
    }
  });

//Delete
  $('.delete').click(function() 
  {
    $('.deletetab', this).addClass('deleted');
    setTimeout(function () 
  {
      $('.deletetab').removeClass('deleted');
  }, 1000);
    
    return false;

  }).dblclick(function() 
  {
    window.location = this.href;

    return false;

  });

//drag and drop
  $( ".sortable" ).sortable(
  {
    delay: 150,
    stop: function() 
    {
      var selectedData = new Array();
      $('.sortable>li').each(function()
      {
        selectedData.push($(this).attr("id"));
      });
      $.ajax(
      {
        method 'POST',
        url:'data.php',
        data:
        {
          position:selectedData
        },
        success:function()
        {}
        
      });
    }
  });
//SORTING
 $(".listitems li").sort(sort_li).appendTo('.listitems');
  function sort_li(a, b) 
  {
    return ($(b).data('position')) < ($(a).data('position')) ? 1 : -1;
  }

  });
