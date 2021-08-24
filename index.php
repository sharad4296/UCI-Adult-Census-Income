<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/synaptic/1.1.4/synaptic.min.js"></script>
<script src="http://d3js.org/d3.v6.js"></script>
</head>
<body>


<?php


echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

?>
<input type="file" name="file" id="file">

<script type = "text/javascript" language = "javascript">
document.getElementById('file').onchange = function(){
    
    var file = this.files[0];

var reader = new FileReader();
reader.onload = function(progressEvent){
    var lines = this.result.split('\n');
    task(1);
function task(i)
 { 
     
            var resNum = []; 
            var resNum1 = [];
            var hh =0;
            var sharad =0;
            var hh1 =0;
            var info ;
                for(var line = 0; line < 8000; line++)
                {
                    info = lines[(i-1)*1000 + line].split(',');
                            for(ii =0;ii<15;ii++)
                        {
                                if(ii ==14)
                                {
                                  //console.log(k1[ii])
                                    if(parseFloat(info[ii]) < 1)
                                    {
                                    // console.log("0")
                                      resNum[ hh] =  0;
                                      hh = hh +1
                                    }
                                    if(parseFloat(info[ii]) > 1)
                                    {
                                    //  console.log("1")
                                      resNum[ hh] =  1;
                                      hh = hh +1
                                    }
                                }
                            else
                            {
                            // console.log(k[i]);
                              resNum1[hh1] =  parseFloat(info[ii]);
                              hh1 = hh1 +1
                            }
                       }

                    
                }


    //console.log("101");
        var Network = synaptic.Network;
        var Layer = synaptic.Layer;
        //console.log("102");
        var inputLayer = new Layer(14);
        var hiddenLayer = new Layer(35);
        var outputLayer = new Layer(1);
        //console.log('103');
        inputLayer.project(hiddenLayer);
        hiddenLayer.project(outputLayer);
        //console.log('104');

      var myNetwork = new Network({
      input: inputLayer,
      hidden: [hiddenLayer],
      output: outputLayer
      });
      var count6 = 0;
      var learningRate = 0.0001;
      //console.log("105") 
        var kanp = 1
        //new code
        var reply =[];
        var maps = new Map()
        var hist = []
        for(var o = 0;o < 565;o++)
                  {
                    reply[o] = 1;
                    if(o<561)
                    {
                      hist[o]=0;
                    }
                    //console.log(reply[o]);
                  }

        function myLoop() { 
          setTimeout(function() {
           console.log(kanp)
           var exported = myNetwork.toJSON();
           //console.log(exported.connections[0].weight)
           //console.log(exported.connections[1].weight)
           myNetwork = Network.fromJSON(exported);

             for(j=1;j<51;j++)
             {
              for(var b=0;b<8000;b++)
                      {
                      // myNetwork.activate([resNum1[b*14]],[resNum1[b*14 +1]],[resNum1[b*14 +2]],[resNum1[b*14 +3]],[resNum1[b*14 +4]],[resNum1[b*14 +5]],[resNum1[b*14 +6]],[resNum1[b*14 +7]],[resNum1[b*14 +8]],[resNum1[b*14 +9]],[resNum1[b*14 +10]],[resNum1[b*14 +11]],[resNum1[b*14 +12]],[resNum1[b*14 +13]]);  
                      myNetwork.activate([resNum1[b*14],resNum1[b*14 +1],resNum1[b*14 +2],resNum1[b*14 +3],resNum1[b*14 +4],resNum1[b*14 +5],resNum1[b*14 +6],resNum1[b*14 +7],resNum1[b*14 +8],resNum1[b*14 +9],resNum1[b*14 +10],resNum1[b*14 +11],resNum1[b*14 +12],resNum1[b*14 +13]]); 
                      myNetwork.propagate(learningRate, [resNum[b]]);

                        
                      //JSON.stringify(data)
                        
                      }
             }
              
        //console.log(j);
             
                // console.log(j);
               //  console.log("HEro");
                  var yt1 =0;
                  var reply4 = [];
                  for(var b=0;b<8000;b++)
                    {
                        // myNetwork.activate([resNum1[b*14]],[resNum1[b*14 +1]],[resNum1[b*14 +2]],[resNum1[b*14 +3]],[resNum1[b*14 +4]],[resNum1[b*14 +5]],[resNum1[b*14 +6]],[resNum1[b*14 +7]],[resNum1[b*14 +8]],[resNum1[b*14 +9]],[resNum1[b*14 +10]],[resNum1[b*14 +11]],[resNum1[b*14 +12]],[resNum1[b*14 +13]]);  
                        yt1 = myNetwork.activate([resNum1[b*14],resNum1[b*14 +1],resNum1[b*14 +2],resNum1[b*14 +3],resNum1[b*14 +4],resNum1[b*14 +5],resNum1[b*14 +6],resNum1[b*14 +7],resNum1[b*14 +8],resNum1[b*14 +9],resNum1[b*14 +10],resNum1[b*14 +11],resNum1[b*14 +12],resNum1[b*14 +13]]); 
                        //myNetwork.propagate(learningRate, [resNum[b]]);
                        //console.log(yt)
                          if(yt1> 0.3)
                          {
                            reply4[b] = 1
                          }
                            else{
                              reply4[b] = 0
                            }
                  
                      
                    }
                  //console.log(reply3)
                  var tp=0;
                  var tn=0;
                  var fp=0;
                  var fn=0;
                  var pr=0;
                  var rc=0;
                  var fm=0;
                  for(let i =0; i< reply4.length;i++)
                {
                  if(reply4[i] == 1 && resNum[i] == 1)
                  {
                    tp = tp +1
                  }
                  if(reply4[i] == 0 && resNum[i] == 0)
                  {
                    tn = tn +1
                  }
                  if(reply4[i] == 1 && resNum[i] == 0)
                  {
                    fp = fp +1
                  }
                  if(reply4[i] == 0 && resNum[i] == 1)
                  {
                    fn = fn +1
                  }
                }
        
                  pr = tp/(tp +fp)
                  rc = tp/(tp +fn)
                  fm = (2*pr*rc)/(pr+rc)
                  console.log(tp)
                  console.log(tn)
                  console.log(fp)
                  console.log(fn)
                  console.log(pr)
                  console.log(rc)
                  console.log(fm)




                  console.log(myNetwork)
                  console.log("Done");
                  var exported = myNetwork.toJSON();
      console.log(exported);
      var o;
                  for( o = 0;o < 525;o++)
                  {

                    sharad = exported.connections[o].weight;
                    hist[o]= Math.abs((sharad-reply[o])/reply[o])
                    if(Math.abs((sharad-reply[o])/reply[o]) > 0.1)
                    {
                       maps[o] = sharad
                    }
                    reply[o] = exported.connections[o].weight;
                    //console.log(reply[o]);
                  }
                 for(var k9=14;k9<50;k9++,o++)
                 {
                  sharad = exported.neurons[k9].bias;
                  hist[o]= Math.abs((sharad-reply[o])/reply[o])
                    if(Math.abs((sharad-reply[o])/reply[o]) > 0.1)
                    {
                       maps[o] = sharad
                    }
                    reply[o] = exported.neurons[k9].bias;
                 }

                 var histGenerator = d3.bin()
                        .domain([0,1])    // Set the domain to cover the entire intervall [0;]
                        .thresholds(19);  // number of thresholds; this will create 19+1 bins

                var bins = histGenerator(hist);
                console.log(bins);
// new code 
                const start = Date.now();
                reply[o]= start;
                maps[o]= start;
                o = o+1;

                  reply[o] = 6;
                  maps[o]=6;
                console.log(reply)
                console.log("abcd")
    $.ajax({
        type: 'POST',
        contentType: 'application/x-www-form-urlencoded',
        url: "http://localhost:3030/users",
        data: {"info":JSON.stringify(maps)},
        success: function(data, textStatus, jqXHR){
          count6 = 1
          console.log("abcd2")
            console.log("success done "+JSON.stringify(data) )
            var k44 = JSON.stringify(data);
            var rzp = data.message;
            // we have to change reply and corresponding exported
            //   code remainingg
            console.log(rzp)

            for (var mm1 in rzp)
                  {
                    reply[mm1] = rzp[mm1]
                  }
                  console.log(reply[0])
            for(var o = 0;o < 525;o++)
                {
                  exported.connections[o].weight = reply[o];
                  //console.log(reply[o]);
                }
                for(var k9=14;k9<50;k9++,o++)
                 {
                  exported.neurons[k9].bias = reply[o]
                 }
              console.log(exported.connections[0].weight)
              console.log(exported.connections[1].weight)
              var imported1 = Network.fromJSON(exported);
              var exported1 = imported1.toJSON();
              console.log(exported1.connections[0].weight);
              console.log(exported1.connections[1].weight);
     
              myNetwork = Network.fromJSON(exported1);
              var yt =0;
              var reply3 = [];
      for(var b=0;b<8000;b++)
        {
         // myNetwork.activate([resNum1[b*14]],[resNum1[b*14 +1]],[resNum1[b*14 +2]],[resNum1[b*14 +3]],[resNum1[b*14 +4]],[resNum1[b*14 +5]],[resNum1[b*14 +6]],[resNum1[b*14 +7]],[resNum1[b*14 +8]],[resNum1[b*14 +9]],[resNum1[b*14 +10]],[resNum1[b*14 +11]],[resNum1[b*14 +12]],[resNum1[b*14 +13]]);  
              yt = myNetwork.activate([resNum1[b*14],resNum1[b*14 +1],resNum1[b*14 +2],resNum1[b*14 +3],resNum1[b*14 +4],resNum1[b*14 +5],resNum1[b*14 +6],resNum1[b*14 +7],resNum1[b*14 +8],resNum1[b*14 +9],resNum1[b*14 +10],resNum1[b*14 +11],resNum1[b*14 +12],resNum1[b*14 +13]]); 
              //myNetwork.propagate(learningRate, [resNum[b]]);
              //console.log(yt)
              if(yt> 0.28)
              {
                //console.log(yt)
                reply3[b] = 1
                //console.log(resNum[b])
              }
                else{
                  //console.log(yt)
                  reply3[b] = 0
                  //console.log(resNum[b])
                }
         //JSON.stringify(data)
          //console.log(resNum[b])
        }
        //console.log(reply3)
        var tp=0;
        var tn=0;
        var fp=0;
        var fn=0;
        var pr=0;
        var rc=0;
        var fm=0;
                for(let i =0; i< reply3.length;i++)
              {
                if(reply3[i] == 1 && resNum[i] == 1)
                {
                  tp = tp +1
                }
                if(reply3[i] == 0 && resNum[i] == 0)
                {
                  tn = tn +1
                }
                if(reply3[i] == 1 && resNum[i] == 0)
                {
                  fp = fp +1
                }
                if(reply3[i] == 0 && resNum[i] == 1)
                {
                  fn = fn +1
                }
              }
        
        pr = tp/(tp +fp)
        rc = tp/(tp +fn)
        fm = (2*pr*rc)/(pr+rc)
        console.log(tp)
        console.log(tn)
        console.log(fp)
        console.log(fn)
        console.log(pr)
        console.log(rc)
        console.log(fm)
        console.log(maps)
				
          maps = new Map()
          console.log(maps)


        },
        error: function(jqXHR, textStatus, errorThrown){
            
        }
 
   }); // ajax ends
   // else and for ends
   
          kanp++;
          if(kanp < 29)
          {

            myLoop();  
          }
        }, 55000)
      }

      myLoop();
 
         
     
        

} 
};

reader.readAsText(file);

   
};
   
   </script>

 
	<!-- //  document.write("before submitting");
    //     document.getElementById("myform").submit();
    //    document.write("after submitting");
    //    var xhr = new XMLHttpRequest();
    //  var xhr = new XMLHttpRequest();
    //  document.write("before submitting");
    //     xhr.open("POST", "http://localhost:3030/users"); 
    //        document.write("after submitting");
    //  xhr.onload = function(event){ 
    //      alert("Success, server responded with: " + event.target.response); // raw response
    //  }; 
    //  document.write("mix submitting");
    // // // // or onerror, onabort
    //  var abcd = document.getElementById("myform");
    //  document.write(abcd);
    //  var formData = new FormData(document.getElementById("myform")); 
    //  console.log(formData);
    //  xhr.send(formData);
    //  document.write("never submitting");
   // $("myform").ajaxForm({url:'http://localhost:3030/users,type: 'post'}) -->

</body>
</html>