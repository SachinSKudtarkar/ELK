<?php

/* @var $this yii\web\View */


$this->title = 'My Search';




?>
<div class="site-index">

    <div class="jumbotron">
        <h1> 
  <form id="searchbox" action="">
    <input id="search" type="text" placeholder="Type here">
    <input id="submit" type="submit" value="Search">
</form>
</div>
        
        </h1>


    </div>


<script type="text/javascript">
    $(document).ready(function() {           
    if (!Modernizr.input.placeholder)
    {       
        var placeholderText = $('#search').attr('placeholder');
        
        $('#search').attr('value',placeholderText);
        $('#search').addClass('placeholder');
        
        $('#search').focus(function() {             
            if( ($('#search').val() == placeholderText) )
            {
                $('#search').attr('value','');
                $('#search').removeClass('placeholder');
            }
        });
        
        $('#search').blur(function() {              
            if ( ($('#search').val() == placeholderText) || (($('#search').val() == '')) )                      
            {   
                $('#search').addClass('placeholder');                     
                $('#search').attr('value',placeholderText);
            }
        });
    }                
});
    
    </script>

