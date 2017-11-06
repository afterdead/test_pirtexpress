<form>

<input type="number" min="1"placeholder="put number" class="num" /><button class="find">Check</button>
</form>
<div id="show">
</div>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

  <script>
    $('form').submit(function(){
      var limit = parseInt($('.num').val())
      var done = 0;
      var i = 1;
      var output = 'เลขจำนวนเฉพาะ : ';
      while(done < limit){
        console.log('do '+ i)
        ++i
        if(i == 2){
          output += i+','
          ++done
        }else{

          pass = true
          for(var k = 2; k  < 10; k++){
            if(i % k === 0){
              if(i != k){
                pass = false
                break;
              }
            }
          }
          //show or drop
          if(pass){
            ++done
            output += i + ','
          }
        }
      }
      $('#show').text(output.substring(0,(output.length-1)));
      return false
    })
  </script>
