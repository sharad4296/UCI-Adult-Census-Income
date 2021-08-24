var express = require('express');
var synaptic = require('synaptic');
var bodyParser = require('body-parser')
var fs = require("fs");
var spawn = require("child_process").spawn;
var  {PythonShell} = require('python-shell')
var router = express.Router();

var fs = require('fs');
var os = require("os");
var nums = 0;
var numss = 0;
var ban =0;
var th = 0;
var z =0;
var tp =0
var fp =0
var tn =0
var fn =0
var pr =0
var rc = 0
var fm = 0
var r1 = [];
var r2 = [];
var r3 = [];
var r4 = [];
var b1 = 0;
var b2 =0;
var b3 =0;
var b4 =0;
var afterr =0;
var beforee =0;
let inp1 = new Map()
let inp2 = new Map()
let inp3 = new Map()
let inp4 = new Map()


/* GET users listing. */
router.get('/', function(req, res, next) {
  res.send('respond with a resource');
});
var resArray = [];
var count = [];
var  reply = [];


router.post('/', function(req, res, next) {
  afterr = Date.now();
  var sizee = req.headers['content-length'];
  console.log(req.headers['content-length']);
 //console.log(req.body);
 // var firstname = req.body.fname;
 // var secondname = req.body.sname;
  var k = req.body.info.split(",");
  //console.log(k[0]);
 // console.log(k)
 console.log(k.length)
  var third = k[k.length -1];
  var thirdname = third.split(":");
  //console.log(thirdname[1]);
  var kkk = thirdname[0].substring(1, thirdname[0].length-1);
  //console.log(kkk)

 // beforee = k[k.length -2];
  //console.log(beforee);
  //console.log(afterr);
  //console.log(afterr - beforee);

  var beforee1 = k[k.length -2];
  var beforee2 = beforee1.split(":")
  beforee = parseFloat(beforee2[1])
   th = 0;
  //nums += parseFloat(firstname);
  //numss += parseFloat(secondname);
  th += parseFloat(thirdname[1]);
  console.log(th)
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
  res.setHeader('Access-Control-Allow-Headers', 'Content-Type');
  res.setHeader('Access-Control-Allow-Credentials', true);

  if(th == 6)
  {
    // console.log(afterr - beforee);
    // b1 =  b1 + (((sizee*1000)/(afterr-beforee))/1048576)
  //console.log(b1)
   //var r1 = [];
   b1 =  b1 + (((sizee*1000)/(afterr-beforee))/1048576)
  console.log(b1)
    //console.log("welcome")
  resArray[0] = res;
  var i;
    divi = k[0];
    divil = divi.split(":");
    valob = parseFloat(divil[1]);
    keyob = divil[0].substring(2, divil[0].length-1);
    inp1[keyob] = valob;
    r1[keyob] = valob;
    
  for(i=1;i<k.length-2;i++)
  {
    divi = k[i];
    divil = divi.split(":");
    keyob = divil[0].substring(1, divil[0].length-1);
    valob = parseFloat(divil[1]);
    inp1[keyob] = valob;
    r1[keyob] = valob;
  }
  count[0] = 1;
 // console.log("done");
 // console.log(r1[525])
 // console.log(r1.length)
 // console.log("got it")
 // console.log(r1[0])
  //console.log(JSON.stringify(resNum))
  }
  if(th == 3)
  {
    // console.log(afterr - beforee);
    // b2 =  b2 + ((sizee*1000)/(afterr-beforee))
  //console.log(b2)
    //var r2 = [];
    //console.log("welcome")
  resArray[1] = res;
  var i;
  divi = k[0];
    divil = divi.split(":");
    valob = parseFloat(divil[1]);
    keyob = divil[0].substring(2, divil[0].length-1);
    inp2[keyob] = valob;
    r2[keyob] = valob;
    for(i=1;i<k.length-2;i++)
  {
    divi = k[i];
    divil = divi.split(":");
    keyob = divil[0].substring(1, divil[0].length-1);
    valob = parseFloat(divil[1]);
    inp2[keyob] = valob;
    r2[keyob] = valob;
  }
  count[1] = 1;
  // console.log("done");
  // console.log(r2)
  // console.log("got it")
  // console.log(r2[0])
  }
  //console.log(JSON.stringify(resNum))
  
  if(th == 4)
  {
  //   console.log(afterr - beforee);
  //   b3 =  b3 + ((sizee*1000)/(afterr-beforee))
  // console.log(b3)
    //var r3 = [];
   // console.log("welcome")
  resArray[2] = res;
  var i;
  divi = k[0];
    divil = divi.split(":");
    valob = parseFloat(divil[1]);
    keyob = divil[0].substring(2, divil[0].length-1);
    inp3[keyob] = valob;
    r3[keyob] = valob;
    for(i=1;i<k.length-2;i++)
  {
    divi = k[i];
    divil = divi.split(":");
    keyob = divil[0].substring(1, divil[0].length-1);
    valob = parseFloat(divil[1]);
    inp3[keyob] = valob;
    r3[keyob] = valob;
  }
    
  count[2] = 1;
  // console.log("done");
  // console.log(r3)
  // console.log("got it")
  // console.log(r3[0])
  //console.log(JSON.stringify(resNum))
  }
  if(th == 5)
  { 
  //   console.log(afterr - beforee);
  //   b4 =  b4 + ((sizee*1000)/(afterr-beforee))
  // console.log(b4)
    //var r4 = [];
  // console.log("welcome")
  resArray[3] = res;
  var i;
  divi = k[0];
    divil = divi.split(":");
    valob = parseFloat(divil[1]);
    keyob = divil[0].substring(2, divil[0].length-1);
    inp4[keyob] = valob;
    r4[keyob] = valob;
    for(i=1;i<k.length-2;i++)
  {
    divi = k[i];
    divil = divi.split(":");
    keyob = divil[0].substring(1, divil[0].length-1);
    valob = parseFloat(divil[1]);
    inp4[keyob] = valob;
    r4[keyob] = valob;
  }
  count [3] = 1;
  
  // console.log("done");
  // console.log(r4)
  // console.log("got it")
  // console.log(r4[0])
  //console.log(JSON.stringify(resNum))
  }
  if(count[0] == 1 && count[1] == 1 && count[2] == 1 && count[3] == 1 ) {
    //console.log(JSON.stringify(resNum))

    //console.log('101');
    //const { Layer, Network } = window.synaptic;
    
      //console.log(exported.connections[0].weight); 
      // for(var o = 0;o < 6;o++)
      // {
      //   reply[o] = exported.connections[o].weight;
      //   console.log(reply[o]);
      // }
     // console.log("inner");
     console.log("champion");
     fs.writeFile("/home/sharad/Documents/aserver1/a.txt", r1, function(err) {
      if(err) {
              console.log(err);
        } 
        else {
          console.log("Output saved");
          }
      });     
      fs.writeFile("/home/sharad/Documents/aserver2/a.txt", r2, function(err) {
        if(err) {
                console.log(err);
          } 
          else {
            console.log("Output saved .");
            }
        });    
        fs.writeFile("/home/sharad/Documents/aserver3/a.txt", r3, function(err) {
          if(err) {
                  console.log(err);
            } 
            else {
              console.log("Output saved ");
              }
          });   
          
          fs.writeFile("/home/sharad/Documents/aserver4/a.txt", r4, function(err) {
            if(err) {
                    console.log(err);
              } 
              else {
                console.log("Output saved ");
                }
            });    
        //     var pythonProcess = spawn('python',["/home/sharad/.config/JetBrains/PyCharmCE2020.2/scratches/scratch.py"],{ maxBuffer: 1000 * 1000 * 10});
        //     pythonProcess.stdout.on('data', (data) => {
        //       console.log(data.toString())
        //   });
        //   pythonProcess.stderr.on('data', (data) => {

        //     console.log(data.toString())
        // });
        var out =0;
        var rtrn = [];
        async function showAvatar() {
                var pyshell =  await new PythonShell('/home/sharad/.config/JetBrains/PyCharmCE2020.2/scratches/scratch.py');
              await  pyshell.on('message', function (message) {
                  // received a message sent from the Python script (a simple "print" statement)
                    rtrn[out] = message;
                    //console.log(message);
                    //console.log(rtrn[out]);
                    out= out +1;
                  
              });

              await  pyshell.end(function (err) {
                  if (err){
                    console.log(err)
                      throw err;
                  };

                  //console.log(rtrn[0])
                  //console.log(rtrn[1])
                  //console.log("hahahahaha")
                  var tt1 = rtrn[0].split(",");
                  var tt2 = rtrn[1].split(",");
                  var tt3 = rtrn[2].split(",");
                  var tt4 = rtrn[3].split(",");
                 // console.log(tt1)
                  //console.log(tt2)
                  //console.log("huahahaha")
                  let maps1 = new Map()
                  for(var iii=0;iii<tt1.length -1;iii++)
                  {
                    maps1[iii] = (parseFloat(tt1[iii])+ parseFloat(tt2[iii]) + parseFloat(tt3[iii]) + parseFloat(tt4[iii]))/4 ;
                    // maps2[iii] = parseFloat(tt2[iii]);
                    // maps3[iii] = parseFloat(tt3[iii]);
                    // maps4[iii] = parseFloat(tt4[iii]);
                  }
                 // console.log(maps1)
                 // console.log(maps2)
                 // console.log("ss")
                 // console.log(maps4
                //  console.log(inp1)
                  for (var mm1 in inp1)
                  {
                    inp1[mm1] = maps1[mm1]
                  }

                  for (var mm2 in inp2)
                  {
                    inp2[mm2] = maps1[mm2]
                  }

                  for (var mm3 in inp3)
                  {
                    inp3[mm3] = maps1[mm3]
                  }
                  for (var mm4 in inp4)
                  {
                    inp4[mm4] = maps1[mm4]
                  }
               //  console.log(inp1)
                 // console.log('finished');
                
                  resArray[0].json({
                    message: inp1,
                  });  
                  resArray[1].json({
                    message: inp2,
                  });    
                  resArray[2].json({
                    message: inp3,
                  });  
                  resArray[3].json({
                    message: inp4,
                  });  

            inp1 =  new Map()
            inp2 =  new Map()
            inp3 =  new Map()
            inp4 =  new Map()

            resArray = [];
            count = [];

              });
      


    console.log("khtm")
  }
  showAvatar();
  //  fs.unlinkSync("/home/sharad/Documents/aserver1/a.txt")
  //  fs.unlinkSync("/home/sharad/Documents/aserver2/a.txt")
  //  fs.unlinkSync("/home/sharad/Documents/aserver3/a.txt")
  //  fs.unlinkSync("/home/sharad/Documents/aserver4/a.txt")
    
       
      //console.log('108');
      
    //   //resNum = [];
    
    //   reply = [];
    //   r1 = [];
    //   r2 = [];
    //   r3 = [];
    //   r4 = [];
    //  // reply1=[];
    //  // reply2=[];
    //   z =0;
    //   tp =0;
    //   fp =0;
    //   tn =0;
    //   fn =0;
    //   pr =0;
    //   rc = 0;
    //   fm = 0;
}
  
});
module.exports = router;
