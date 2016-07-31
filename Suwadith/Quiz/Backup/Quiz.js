/**
 * Created by Suwadith on 7/31/2016.
 */

var switchButton = "<input id='startButton' type=\"button\" onclick=\"startQuiz()\" value=\"Next\" class=\"buttonStyle\">";


function start() {
    document.getElementById("startMenu").setAttribute('class', 'hide');
    document.getElementById("radioButtons").setAttribute('class', 'show');
    document.getElementById("timer").setAttribute('class', 'show');
    document.getElementById("questionMenu").innerHTML += switchButton;
    startQuiz();
    timer();
}

function showMarks() {
    document.getElementById("timer").setAttribute('class', 'hide');
    document.getElementById("questionMenu").setAttribute('class', 'hide');
    document.getElementById("resultsMenu").setAttribute('class', 'show');

var questions = ["Which of the following classic films was set in unoccupied Africa during the beginning of World War II?",
    "Professor Moriaty is the criminal mastermind found in which series of detective books and movies?",
    "Name the winner of the 2001 Academy Award for Best Picture.",
    "What is the name of the quick-tempered monarch featured in \"Alice in Wonderland\"? ",
    "Which of the following films does not feature the Academy Award winning actor Tom Hanks?",
    "Finish the title to this 2005 Disney animated film - ?????? Little.",
    "Name the winner of the 2002 Academy Award for Best Picture. ",
    "Modeled after Robert the Doll, \"Chucky\" is the villain of which film series? ",
    "What 2009 Disney film became the second animated movie ever to be nominated for a Best Picture Academy Award?",
    "Name the winner of the 2003 Academy Award for Best Picture."];

var choices = [[" Citizen Kane", " Casablanca", " Key Largo", " The Maltese Falcon"],
    ["Hercule Poirot", "Sherlock Holmes", "Miss Marple", "Ellery Queen"],
    ["Gosford Park", "A Beautiful Mind", "The Fellowship of the Ring", "Moulin Rouge!"],
    ["Queen of Hearts", "Queen of Spades", "Queen of Clubs", "Queen of Diamonds"],
    ["You've Got Mail", "The Curious Case of Benjamin Button", "Forrest Gump", "The Green Mile"],
    ["Chicken", "Sheep", "Donkey", "Penguin"],
    ["Gangs of New York", "Chicago", "The Hours", "The Pianist"],
    ["Demonic Toys", "Dolly Dearest", "Child's Play", "Fright Night"],
    ["Up", "Tangled", "Finding Nemo", "Toy Story 2"],
    ["Mystic River", "Seabiscuit", "Lost in Translation", "The Return of the King"]];

var CorrectAnswers = ["2", "2", "2", "1", "2", "1", "2", "3", "1", "4"];

var counter = 0;

var userInput = [];

var endQuiz = false;

function startQuiz() {
    if(counter == 0) {
        displayQandA(choices[0]);
        counter++;
    } else if (counter > 0 && counter < 10) {
        checkAnswers();
        displayQandA(choices[counter]);
        counter++;
    } else {
        checkAnswers();
        endQuiz = true;
        showMarks();
        counter++;
    }
}
function displayQandA(choices) {
    document.getElementById("questions").innerHTML = questions[counter];
    document.getElementById("question1").innerHTML = choices[0];
    document.getElementById("question2").innerHTML = choices[1];
    document.getElementById("question3").innerHTML = choices[2];
    document.getElementById("question4").innerHTML = choices[3];
}

function checkAnswers() {
    var c = 0;
    var answers = document.getElementsByName('questions');
    var q_answers = ["0","2","2","4","1","4","1","2","4","1","2"];
    for(var i = 0 ; i < answers.length ; i++){
        if(answers[i].checked == true){
            userInput.push(answers[i].value);
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
        userInput.push(0);
        //changeBGToBlue();
    }
}


   /* var CorrectAnswers = ["2","2","4","1","4","1","2","4","1","2"];*/
    //alert("Marking Started");
    var marks = 0;
    for(var i = 0 ; i < CorrectAnswers.length ; i++){
        if(userInput[i] == CorrectAnswers[i]){
            marks += 2;
        } else if (userInput[i] == 0){
            marks += 0;
        } else {
            marks -= 1;
        }

        //alert("USER ANS "+users_answers[i]+" ANSER"+CorrectAnswers[i]);
    }
    //alert("Marks "+marks);

    var ques = "ques_";
    var x,cr_id,gi_id,answ;
    for(var i = 0 ; i < choices.length ; i++){
        document.getElementById(ques+(i)).innerHTML = questions[i];

        cr_id = "answ_"+(i);
        answ = parseInt(CorrectAnswers[i]);
        x = (answ - 1);
        document.getElementById(cr_id).innerHTML = "Correct Answer - "+choices[i][x];

        gi_id = "giv_"+(i);
        answ = parseInt(userInput[i]);
        x = parseInt(answ - 1);
        if(x == -1){
            document.getElementById(gi_id).innerHTML = "Answer wasn't given";
        } else {
            document.getElementById(gi_id).innerHTML = "Given Answer - "+choices[i][x];
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
            if(endQuiz == false) {
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

