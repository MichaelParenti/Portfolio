

let title = document.querySelector("#title");
let title2 = document.querySelector("#title2");

let aa1 = document.querySelector("#Aanswer1");
let aa2 = document.querySelector("#Aanswer2");
let aa3 = document.querySelector("#Aanswer3");

let ba1 = document.querySelector("#Banswer1");
let ba2 = document.querySelector("#Banswer2");
let ba3 = document.querySelector("#Banswer3");

let ca1 = document.querySelector("#Canswer1");
let ca2 = document.querySelector("#Canswer2");
let ca3 = document.querySelector("#Canswer3");

let da1 = document.querySelector("#Danswer1");
let da2 = document.querySelector("#Danswer2");
let da3 = document.querySelector("#Danswer3");

let ea1 = document.querySelector("#Eanswer1");
let ea2 = document.querySelector("#Eanswer2");
let ea3 = document.querySelector("#Eanswer3");

let fa1 = document.querySelector("#Fanswer1");
let fa2 = document.querySelector("#Fanswer2");
let fa3 = document.querySelector("#Fanswer3");

let ga1 = document.querySelector("#Ganswer1");
let ga2 = document.querySelector("#Ganswer2");
let ga3 = document.querySelector("#Ganswer3");

let ha1 = document.querySelector("#Hanswer1");
let ha2 = document.querySelector("#Hanswer2");
let ha3 = document.querySelector("#Hanswer3");

let ia1 = document.querySelector("#Ianswer1");
let ia2 = document.querySelector("#Ianswer2");
let ia3 = document.querySelector("#Ianswer3");

let ja1 = document.querySelector("#Janswer1");
let ja2 = document.querySelector("#Janswer2");
let ja3 = document.querySelector("#Janswer3");

let next = document.querySelector("#next");
let next2 = document.querySelector("#next2");
let next3 = document.querySelector("#next3");
let next4 = document.querySelector("#next4");
let next5 = document.querySelector("#next5");
let next6 = document.querySelector("#next6");
let next7 = document.querySelector("#next7");
let next8 = document.querySelector("#next8");
let next9 = document.querySelector("#next9");
let next10 = document.querySelector("#next10");

const youScored = document.querySelector("#yours");
let all = document.querySelector("#all");
const scoreDisplay = document.querySelector(".correct");
let score = 0;







title.innerHTML = "1.   How many books are there in the Bible?";
aa1.innerHTML = "66";
aa2.innerHTML = "76";
aa3.innerHTML = "96";

aa1.onclick = function(){
    aa1.style.color = 'green';
    aa2.style.color = 'red';
    aa3.style.color = 'red';
    next.style.visibility = 'visible';
        score++;
        scoreDisplay.innerHTML = score;
}
aa2.onclick = function(){
    aa1.style.color = 'green';
    aa2.style.color = 'red';
    aa3.style.color = 'red';
    next.style.visibility = 'visible';
}
aa3.onclick = function(){
    aa1.style.color = 'green';
    aa2.style.color = 'red';
    aa3.style.color = 'red';
    next.style.visibility = 'visible';
}



title2.innerHTML = "2.  What does the word “Pentateuch” mean?";
ba1.innerHTML = "5 Laws";
ba2.innerHTML = "5 Books";
ba3.innerHTML = "5 Teachings";

ba1.onclick = function(){
    ba2.style.color = 'green';
    ba1.style.color = 'red';
    ba3.style.color = 'red';
    next2.style.visibility = 'visible';
}
ba2.onclick = function(){
    ba2.style.color = 'green';
    ba1.style.color = 'red';
    ba3.style.color = 'red';
    next2.style.visibility = 'visible';
        score++;
        scoreDisplay.innerHTML = score;
}
ba3.onclick = function(){
    ba2.style.color = 'green';
    ba1.style.color = 'red';
    ba3.style.color = 'red';
    next2.style.visibility = 'visible';
}




title3.innerHTML = "3.  How many books are in the New Testament?";
ca1.innerHTML = "25";
ca2.innerHTML = "39";
ca3.innerHTML = "27";

ca1.onclick = function(){
    ca3.style.color = 'green';
    ca1.style.color = 'red';
    ca2.style.color = 'red';
    next3.style.visibility = 'visible';
}
ca2.onclick = function(){
    ca3.style.color = 'green';
    ca1.style.color = 'red';
    ca2.style.color = 'red';
    next3.style.visibility = 'visible';
}
ca3.onclick = function(){
    ca3.style.color = 'green';
    ca1.style.color = 'red';
    ca2.style.color = 'red';
    next3.style.visibility = 'visible';
        score++;
        scoreDisplay.innerHTML = score;
}


title4.innerHTML = "4.   What does the word \"Testament\" literally mean?";
da1.innerHTML = "Testimony";
da2.innerHTML = "Story";
da3.innerHTML = "Covenant";

da1.onclick = function(){
    da3.style.color = 'green';
    da1.style.color = 'red';
    da2.style.color = 'red';
    next4.style.visibility = 'visible';
}
da2.onclick = function(){
    da3.style.color = 'green';
    da1.style.color = 'red';
    da2.style.color = 'red';
    next4.style.visibility = 'visible';
}
da3.onclick = function(){
    da3.style.color = 'green';
    da1.style.color = 'red';
    da2.style.color = 'red';
    next4.style.visibility = 'visible';
        score++;
        scoreDisplay.innerHTML = score;
}


title5.innerHTML = "5.   What is the 3rd section of the Old Testament?";
ea1.innerHTML = "Poetry/Wisdom";
ea2.innerHTML = "History";
ea3.innerHTML = "Prophecy";

ea1.onclick = function(){
    ea1.style.color = 'green';
    ea2.style.color = 'red';
    ea3.style.color = 'red';
    next5.style.visibility = 'visible';
        score++;
        scoreDisplay.innerHTML = score;
}
ea2.onclick = function(){
    ea1.style.color = 'green';
    ea2.style.color = 'red';
    ea3.style.color = 'red';
    next5.style.visibility = 'visible';
}
ea3.onclick = function(){
    ea1.style.color = 'green';
    ea2.style.color = 'red';
    ea3.style.color = 'red';
    next5.style.visibility = 'visible';
}



title6.innerHTML = "6.   How many books are in the Old Testament?";
fa1.innerHTML = "49";
fa2.innerHTML = "39";
fa3.innerHTML = "52";

fa1.onclick = function(){
    fa2.style.color = 'green';
    fa1.style.color = 'red';
    fa3.style.color = 'red';
    next6.style.visibility = 'visible';
}
fa2.onclick = function(){
    fa2.style.color = 'green';
    fa1.style.color = 'red';
    fa3.style.color = 'red';
    next6.style.visibility = 'visible';
        score++;
        scoreDisplay.innerHTML = score;
}
fa3.onclick = function(){
    fa2.style.color = 'green';
    fa1.style.color = 'red';
    fa3.style.color = 'red';
    next6.style.visibility = 'visible';
}



title7.innerHTML = "7.   What does the word \"Gospel\" mean?";
ga1.innerHTML = "Good News";
ga2.innerHTML = "Great News";
ga3.innerHTML = "Go Tell";

ga1.onclick = function(){
    ga1.style.color = 'green';
    ga2.style.color = 'red';
    ga3.style.color = 'red';
    next7.style.visibility = 'visible';
        score++;
        scoreDisplay.innerHTML = score;
}
ga2.onclick = function(){
    ga1.style.color = 'green';
    ga2.style.color = 'red';
    ga3.style.color = 'red';
    next7.style.visibility = 'visible';
}
ga3.onclick = function(){
    ga1.style.color = 'green';
    ga2.style.color = 'red';
    ga3.style.color = 'red';
    next7.style.visibility = 'visible';
}


title8.innerHTML = "8.   Approximately how many years were between the Old and New Testaments?";
ha1.innerHTML = "100 Years";
ha2.innerHTML = "250 Years";
ha3.innerHTML = "400 Years";

ha1.onclick = function(){
    ha3.style.color = 'green';
    ha1.style.color = 'red';
    ha2.style.color = 'red';
    next8.style.visibility = 'visible';
}
ha2.onclick = function(){
    ha3.style.color = 'green';
    ha1.style.color = 'red';
    ha2.style.color = 'red';
    next8.style.visibility = 'visible';
}
ha3.onclick = function(){
    ha3.style.color = 'green';
    ha1.style.color = 'red';
    ha2.style.color = 'red';
    next8.style.visibility = 'visible';
        score++;
        scoreDisplay.innerHTML = score;
}


title9.innerHTML = "9.   Which book is the New Testament book of History?";
ia1.innerHTML = "Acts";
ia2.innerHTML = "Romans";
ia3.innerHTML = "Revelation";

ia1.onclick = function(){
    ia1.style.color = 'green';
    ia2.style.color = 'red';
    ia3.style.color = 'red';
    next9.style.visibility = 'visible';
        score++;
        scoreDisplay.innerHTML = score;
}
ia2.onclick = function(){
    ia1.style.color = 'green';
    ia2.style.color = 'red';
    ia3.style.color = 'red';
    next9.style.visibility = 'visible';
}
ia3.onclick = function(){
    ia1.style.color = 'green';
    ia2.style.color = 'red';
    ia3.style.color = 'red';
    next9.style.visibility = 'visible';
}


title10.innerHTML = "10.   What does the word \"Canon\" literally mean in Bible context?";
ja1.innerHTML = "Teaching Stick";
ja2.innerHTML = "Divine Staff";
ja3.innerHTML = "Measuring Rod";

ja1.onclick = function(){
    ja3.style.color = 'green';
    ja1.style.color = 'red';
    ja2.style.color = 'red';
    next10.style.visibility = 'visible';
}
ja2.onclick = function(){
    ja3.style.color = 'green';
    ja1.style.color = 'red';
    ja2.style.color = 'red';
    next10.style.visibility = 'visible';
}
ja3.onclick = function(){
    ja3.style.color = 'green';
    ja1.style.color = 'red';
    ja2.style.color = 'red';
    next10.style.visibility = 'visible';
        score++;
        scoreDisplay.innerHTML = score;
}






next.onclick = function(){
    all.style.zIndex = '-1';
    next.style.visibility = 'hidden';
    all.style.visibility = 'hidden';
    all2.style.visibility = 'visible';
}

next2.onclick = function(){
    all2.style.zIndex = '1';
    next2.style.visibility = 'hidden';
    all2.style.visibility = 'hidden';
    all3.style.visibility = 'visible';
}

next3.onclick = function(){
    all3.style.zIndex = '-1';
    next3.style.visibility = 'hidden';
    all3.style.visibility = 'hidden';
    all4.style.visibility = 'visible';
}

next4.onclick = function(){
    all4.style.zIndex = '1';
    next4.style.visibility = 'hidden';
    all4.style.visibility = 'hidden';
    all5.style.visibility = 'visible';
}

next5.onclick = function(){
    all5.style.zIndex = '1';
    next5.style.visibility = 'hidden';
    all5.style.visibility = 'hidden';
    all6.style.visibility = 'visible';
}

next6.onclick = function(){
    all6.style.zIndex = '1';
    next6.style.visibility = 'hidden';
    all6.style.visibility = 'hidden';
    all7.style.visibility = 'visible';
}

next7.onclick = function(){
    all7.style.zIndex = '1';
    next7.style.visibility = 'hidden';
    all7.style.visibility = 'hidden';
    all8.style.visibility = 'visible';
}

next8.onclick = function(){
    all8.style.zIndex = '1';
    next8.style.visibility = 'hidden';
    all8.style.visibility = 'hidden';
    all9.style.visibility = 'visible';
}

next9.onclick = function(){
    all9.style.zIndex = '1';
    next9.style.visibility = 'hidden';
    all9.style.visibility = 'hidden';
    all10.style.visibility = 'visible';
}

next10.onclick = function(){
    all10.style.zIndex = '1';
    next10.style.visibility = 'hidden';
    all10.style.visibility = 'hidden';
    youScored.style.visibility = 'visible';
    scoreDisplay.style.right = '300px';
    scoreDisplay.style.top = '200px';
}