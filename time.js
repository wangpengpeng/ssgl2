     tmpDate = new Date();
     date = tmpDate.getDate();
     month= tmpDate.getMonth() + 1 ;
     year= tmpDate.getYear();
     document.write(year);
     document.write("��");
     document.write(month);
     document.write("��");
     document.write(date);
     document.write("�� ");

     myArray=new Array(6);
     myArray[0]="������"
     myArray[1]="����һ"
     myArray[2]="���ڶ�"
     myArray[3]="������"
     myArray[4]="������"
     myArray[5]="������"
     myArray[6]="������"
     weekday=tmpDate.getDay();
     if (weekday==0 | weekday==6)
     {
         document.write(myArray[weekday])
     }
     else
     {
         document.write(myArray[weekday])
     }

     var c = "<font color='#000000'>"
     var d = "</font>"
     if(navigator.appName == "Netscape") 
     {
         document.write('<layer id="clock3"></layer>');
     }
     if (navigator.appVersion.indexOf("MSIE") != -1)
     {
         document.write('&nbsp;<span id="clock3"></span>');
     }
     
     function showclock3()
     {
         var date3 = new Date();
         var hour3 = date3.getHours();
         var min3 = date3.getMinutes();
         var sec3 = date3.getSeconds();
         var col3 = ":";
         var x3;
         x3=hour3;
         if (x3>=24) x3=x3-24;
         if (min3<=9) min3="0"+min3;
         if (sec3<=9) sec3="0"+sec3;
         if(navigator.appName == "Netscape")
         {
             document.clock3.document.write(c+x3+col3+min3+col3+sec3+d);
             document.clock3.document.close();
         }
         if (navigator.appVersion.indexOf("MSIE") != -1)
         {
             clock3.innerHTML =c+x3+col3+min3+col3+sec3+d;
         }
     }
     setInterval("showclock3()",1000);