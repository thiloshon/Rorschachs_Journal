/*
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    </head>
    <body>

    </body>
    <style>

</style>
<script>
var quiz_button = "<input id='startQuiz' type=\"button\" onclick=\"startQuestions()\" value=\"Next\" class=\"btnDesign\">";
//var des_button = "<center><input id='startDes' type=\"button\" onclick=\"startQuiz()\" value=\"Start Game\" class=\"btnDesign\"></center>";
function startQuiz(){
    document.getElementById("rules").setAttribute('class','hidden');
    document.getElementById("radioButtons").setAttribute('class', 'visible');
    document.getElementById("timer").setAttribute('class', 'visible');
    document.getElementById("questionMenu").innerHTML += quiz_button;
    startQuestions();
    timer();
}
function description() {
    //Visible Start Menu division (Title,Button)
    document.getElementById("startMenu").style.display = 'none';
    document.getElementById("rules").setAttribute('class', 'visible');
    //document.getElementById("rules").innerHTML += des_button;

}

var counter = 0;
var questions = [
    "Who won the 2015 FIFA ballon d'or ?",
    "Which team won Champions League 2015/16 ?",
    "Which team was won BPL (Barclays Premier League) without losing a match in season?",
    "Who won the Golden Ball in FIFA World Cup 2014?",
    "Who is the only player to have scored in a Champions League final, FA Cup final, UEFA Cup final and League Cup final?",
    "Which team has won UEFA EURO 2016?",
    "Which city has the most clubs competing in its country's top division?",
    "Which club has won the most Serie A titles?",
    "Who were the last French club to play in a Champions League final?",
    "Which country finished fourth in the World Cup in 2014?"
];
var answers = ["2","2","4","1","4","1","2","4","1","2"];
var users_answers = [];
var answers = [[" Cristiano Ronaldo", " Lionel Messi", " Neymar Júnior", " Manuel Neuer"],
    [" Real Madrid", " Barcelona", " Liverpool", " Bayern Munich"],
    [" Chelsea", " Manchester United", " Liverpool", " Arsenal"],
    [" Lionel Messi", " Karim Benzema", " James Rodriguez", " Arjen Robben"],
    [" Wayne Rooney", " Frank Lampard", " Didier Drogba", " Steven Gerrard"],
    [" Portugal", " Spain", " France", " Italy"],
    [" Moscow", " London", " Tokyo", " Rome"],
    [" Inter Milan", " Milan", " Roma", " Juventus"],
    [" AS Monaco", " Saint-Étienne", " Marseille", " Paris Saint-Germain"],
    [" Argentina", " Brazil", " Holland", " Italy"]
];
var quizFinished = false;

function startQuestions() {
    if(counter == 0) {
        displayQandA(answers[0]);
        counter++;
    } else if (counter > 0 && counter < 10) {
        checkAnswers();
        displayQandA(answers[counter]);
        counter++;
    } else {
        checkAnswers();
        quizFinished = true;
        showMarks();
        counter++;
    }
}
function displayQandA(answers) {
    document.getElementById("questions").innerHTML = questions[counter];
    document.getElementById("q_1").innerHTML = answers[0];
    document.getElementById("q_2").innerHTML = answers[1];
    document.getElementById("q_3").innerHTML = answers[2];
    document.getElementById("q_4").innerHTML = answers[3];
}
function checkAnswers() {
    var c = 0;
    var answers = document.getElementsByName('questions');
    var q_answers = ["0","2","2","4","1","4","1","2","4","1","2"];
    for(var i = 0 ; i < answers.length ; i++){
        if(answers[i].checked == true){
            users_answers.push(answers[i].value);
            if((answers[i].value) == q_answers[counter]){
                changeBGToGreen()
            } else {
                changeBGToRed();
            }
            answers[i].checked = false;
            c++;
        }
    }
    if(c < 1){
        users_answers.push(0);
        //changeBGToBlue();
    }
}
function showMarks() {
    document.getElementById("timer").setAttribute('class', 'hidden');
    document.getElementById("questionMenu").setAttribute('class', 'hidden');
    document.getElementById("resultsMenu").setAttribute('class', 'M_Title');

    var CorrectAnswers = ["2","2","4","1","4","1","2","4","1","2"];
    //alert("Marking Started");
    var marks = 0;
    for(var i = 0 ; i < CorrectAnswers.length ; i++){
        if(users_answers[i] == CorrectAnswers[i]){
            marks += 2;
        } else if (users_answers[i] == 0){
            marks += 0;
        } else {
            marks -= 1;
        }

        //alert("USER ANS "+users_answers[i]+" ANSER"+CorrectAnswers[i]);
    }
    //alert("Marks "+marks);

    var ques = "ques_";
    var x,cr_id,gi_id,answ;
    for(var i = 0 ; i < answers.length ; i++){
        document.getElementById(ques+(i)).innerHTML = questions[i];

        cr_id = "answ_"+(i);
        answ = parseInt(CorrectAnswers[i]);
        x = (answ - 1);
        document.getElementById(cr_id).innerHTML = "Correct Answer - "+answers[i][x];

        gi_id = "giv_"+(i);
        answ = parseInt(users_answers[i]);
        x = parseInt(answ - 1);
        if(x == -1){
            document.getElementById(gi_id).innerHTML = "Answer wasn't given";
        } else {
            document.getElementById(gi_id).innerHTML = "Given Answer - "+answers[i][x];
        }

    }

    if(marks >= 15){
        //Green
        document.body.style.backgroundColor = "#007f00";
    } else if (marks >= 10) {
        //Blue
        document.body.style.backgroundColor = "#000066";
    } else if (marks >= 5) {
        //Orange
        document.body.style.backgroundColor = "#cc8400";
    } else if (marks > 0) {
        //Grey
        document.body.style.backgroundColor = "#696969";
    } else {
        //Red
        document.body.style.backgroundColor = "#7f0000";
    }
    document.getElementById("results").innerHTML = "You Mark is "+ marks;
}
function timer() {
    var seconds_left = 60;
    var interval = setInterval(function() {
        document.getElementById('timer').innerHTML = "Seconds Left "+--seconds_left;

        if (seconds_left == 0)
        {
            document.getElementById('timer').innerHTML = 'Time finished';
            if(quizFinished == false) {
                showMarks();
            }
            clearInterval(interval);
        }
    }, 1000);
}
function changeBGToRed() {
    var redColor = ["#ff0000","#e50000","#cc0000","#b20000","#990000","#7f0000","#660000","#4c0000","#330000","#190000","#000000"];
    var counter = 0;
    var interval = setInterval(function() {
        ++counter;
        document.body.style.backgroundColor = redColor[counter];
        if (counter > 10)
        {
            clearInterval(interval);
        }
    }, 40);
}
function changeBGToGreen() {
    var greenColor = ["#00ff00","#00e500","#00cc00","#00b200","#009900","#007f00","#006600","#004c00","#003300","#001900","#000000"];
    var counter = 0;
    var interval = setInterval(function() {
        ++counter;
        document.body.style.backgroundColor = greenColor[counter];
        if (counter > 10)
        {
            clearInterval(interval);
        }
    }, 40);
}
function changeBGToBlue() {
    var blueColor = ["#0000ff","#0000e5","#0000cc","#0000b2","#000099","#00007f","#000066","#00004c","#000033","#000019","#000000"];
    var counter = 0;
    var interval = setInterval(function() {
        ++counter;
        document.body.style.backgroundColor = blueColor[counter];
        if (counter > 10)
        {
            clearInterval(interval);
        }
    }, 40);
}
</script>
</html>*/
