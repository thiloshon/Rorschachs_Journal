/**
 * Created by Suwadith on 7/31/2016.
 */

function start() {

    document.getElementById("startMenu").setAttribute('class', 'hide');
    document.getElementById("radioButtons").setAttribute('class', 'show');
    document.getElementById("timer").setAttribute('class', 'show');
    timer();
}

function showMarks() {

    document.getElementById("radioButtons").setAttribute('class', 'hide');
    document.getElementById("timer").setAttribute('class', 'hide');
    document.getElementById("resultsMenu").setAttribute('class', 'show');
    checkAnswers();
    seconds = 0;
}


var seconds = 0;
function timer() {
    seconds = 100;
    var interval = setInterval(function () {
        document.getElementById('timer').innerHTML = "Seconds Left " + --seconds;

        if (seconds == 0) {
            document.getElementById('timer').innerHTML = 'Time up';
            clearInterval(interval);
            showMarks();
        }
    }, 1000);
}


var marks = 0;
var correctAnswers = ["b", "b", "b", "a", "b", "a", "b", "c", "a", "d"];
var correctAnswer = "you've chosen the correct answer. It's  ";
var incorrectAnswer = "Incorrect answer. Correct Answer is ";
var didntChoose = "You didn't choose an answer. Correct Answer is ";
var correctChoice = ["Casablanca", "Sherlock Holmes", "A Beautiful Mind", "Queen of Hearts", "The Curious Case of Benjamin Button", "Chicken", "Chicago", "Child's Play", "Up", "The Return of the King"];
var radios;


function checkAnswers() {
    radios = document.getElementsByName("q1");
    document.getElementById("displayQuestion1").innerHTML = document.getElementById("question1").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == correctAnswers[0]) {
                document.getElementById("displayAnswer1").innerHTML = correctAnswer + correctChoice[0];
                marks += 2;
            } else {
                document.getElementById("displayAnswer1").innerHTML = incorrectAnswer + correctChoice[0];
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer1").innerHTML = didntChoose + correctChoice[0];
            marks += 0;
        }
    }

    radios = document.getElementsByName("q2");
    document.getElementById("displayQuestion2").innerHTML = document.getElementById("question2").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == correctAnswers[1]) {
                document.getElementById("displayAnswer2").innerHTML = correctAnswer + correctChoice[1];
                marks += 2;
            } else {
                document.getElementById("displayAnswer2").innerHTML = incorrectAnswer + correctChoice[1];
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer2").innerHTML = didntChoose + correctChoice[1];
            marks += 0;
        }
    }

    radios = document.getElementsByName("q3");
    document.getElementById("displayQuestion3").innerHTML = document.getElementById("question3").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == correctAnswers[2]) {
                document.getElementById("displayAnswer3").innerHTML = correctAnswer + correctChoice[2];
                marks += 2;
            } else {
                document.getElementById("displayAnswer3").innerHTML = incorrectAnswer + correctChoice[2];
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer3").innerHTML = didntChoose + correctChoice[2];
            marks += 0;
        }
    }

    radios = document.getElementsByName("q4");
    document.getElementById("displayQuestion4").innerHTML = document.getElementById("question4").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == correctAnswers[3]) {
                document.getElementById("displayAnswer4").innerHTML = correctAnswer + correctChoice[3];
                marks += 2;
            } else {
                document.getElementById("displayAnswer4").innerHTML = incorrectAnswer + correctChoice[3];
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer4").innerHTML = didntChoose + correctChoice[3];
            marks += 0;
        }
    }

    radios = document.getElementsByName("q5");
    document.getElementById("displayQuestion5").innerHTML = document.getElementById("question5").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == correctAnswers[4]) {
                document.getElementById("displayAnswer5").innerHTML = correctAnswer + correctChoice[4];
                marks += 2;
            } else {
                document.getElementById("displayAnswer5").innerHTML = incorrectAnswer + correctChoice[4];
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer5").innerHTML = didntChoose + correctChoice[4];
            marks += 0;
        }
    }

    radios = document.getElementsByName("q6");
    document.getElementById("displayQuestion6").innerHTML = document.getElementById("question6").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == correctAnswers[5]) {
                document.getElementById("displayAnswer6").innerHTML = correctAnswer + correctChoice[5];
                marks += 2;
            } else {
                document.getElementById("displayAnswer6").innerHTML = incorrectAnswer + correctChoice[5];
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer6").innerHTML = didntChoose + correctChoice[5];
            marks += 0;
        }
    }

    radios = document.getElementsByName("q7");
    document.getElementById("displayQuestion7").innerHTML = document.getElementById("question7").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == correctAnswers[6]) {
                document.getElementById("displayAnswer7").innerHTML = correctAnswer + correctChoice[6];
                marks += 2;
            } else {
                document.getElementById("displayAnswer7").innerHTML = incorrectAnswer + correctChoice[6];
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer7").innerHTML = didntChoose + correctChoice[6];
            marks += 0;
        }
    }

    radios = document.getElementsByName("q8");
    document.getElementById("displayQuestion8").innerHTML = document.getElementById("question8").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == correctAnswers[7]) {
                document.getElementById("displayAnswer8").innerHTML = correctAnswer + correctChoice[7];
                marks += 2;
            } else {
                document.getElementById("displayAnswer8").innerHTML = incorrectAnswer + correctChoice[7];
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer8").innerHTML = didntChoose + correctChoice[7];
            marks += 0;
        }
    }

    radios = document.getElementsByName("q9");
    document.getElementById("displayQuestion9").innerHTML = document.getElementById("question9").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == correctAnswers[8]) {
                document.getElementById("displayAnswer9").innerHTML = correctAnswer + correctChoice[8];
                marks += 2;
            } else {
                document.getElementById("displayAnswer9").innerHTML = incorrectAnswer + correctChoice[8];
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer9").innerHTML = didntChoose + correctChoice[8];
            marks += 0;
        }
    }

    radios = document.getElementsByName("q10");
    document.getElementById("displayQuestion10").innerHTML = document.getElementById("question10").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == correctAnswers[9]) {
                document.getElementById("displayAnswer10").innerHTML = correctAnswer + correctChoice[9];
                marks += 2;
            } else {
                document.getElementById("displayAnswer10").innerHTML = incorrectAnswer + correctChoice[9];
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer10").innerHTML = didntChoose + correctChoice[9];
            marks += 0;
        }
    }

    if (marks >= 15) {
        document.body.style.backgroundColor = "lawngreen";
    } else if (marks >= 10) {
        document.body.style.backgroundColor = "lightseagreen";
    } else if (marks >= 5) {
        document.body.style.backgroundColor = "yellow";
    } else if (marks >= 0) {
        document.body.style.backgroundColor = "red";
    } else {
        marks = 0;
    }

    var m = marks.toString();
    document.getElementById("displayMarks").innerHTML = "Your Score is: " + m;

}




