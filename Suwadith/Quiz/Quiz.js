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
}

function timer() {
    var seconds = 100;
    var interval = setInterval(function () {
        document.getElementById('timer').innerHTML = "Seconds Left " + --seconds;

        if (seconds == 0) {
            document.getElementById('timer').innerHTML = 'Time up';
            showMarks();
            clearInterval(interval);
        }
    }, 1000);
}

var marks = 0;
var CorrectAnswers = ["b", "b", "b", "a", "b", "a", "b", "c", "a", "d"];
var radios;


function checkAnswers() {
    radios = document.getElementsByName("q1");
    document.getElementById("displayQuestion1").innerHTML = document.getElementById("question1").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == CorrectAnswers[0]) {
                document.getElementById("displayAnswer1").innerHTML = "you've chosen the correct answer. It's Casablanca";
                marks += 2;
            } else {
                document.getElementById("displayAnswer1").innerHTML = "Incorrect answer. Correct Answer is Casablanca";
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer1").innerHTML = "You didn't choose an answer. Correct Answer is Casablanca";
            marks += 0;
        }
    }

    radios = document.getElementsByName("q2");
    document.getElementById("displayQuestion2").innerHTML = document.getElementById("question2").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == CorrectAnswers[1]) {
                document.getElementById("displayAnswer2").innerHTML = "you've chosen the correct answer. It's  Sherlock Holmes";
                marks += 2;
            } else {
                document.getElementById("displayAnswer2").innerHTML = "Incorrect answer. Correct Answer is Sherlock Holmes";
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer2").innerHTML = "You didn't choose an answer. Correct Answer is Sherlock Holmes";
            marks += 0;
        }
    }

    radios = document.getElementsByName("q3");
    document.getElementById("displayQuestion3").innerHTML = document.getElementById("question3").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == CorrectAnswers[2]) {
                document.getElementById("displayAnswer3").innerHTML = "you've chosen the correct answer. It's A Beautiful Mind";
                marks += 2;
            } else {
                document.getElementById("displayAnswer3").innerHTML = "Incorrect answer. Correct Answer is A Beautiful Mind";
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer3").innerHTML = "You didn't choose an answer. Correct Answer is A Beautiful Mind";
            marks += 0;
        }
    }

    radios = document.getElementsByName("q4");
    document.getElementById("displayQuestion4").innerHTML = document.getElementById("question4").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == CorrectAnswers[3]) {
                document.getElementById("displayAnswer4").innerHTML = "you've chosen the correct answer. It's Queen of Hearts";
                marks += 2;
            } else {
                document.getElementById("displayAnswer4").innerHTML = "Incorrect answer. Correct Answer is A Beautiful Mind";
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer4").innerHTML = "You didn't choose an answer. Correct Answer is A Beautiful Mind";
            marks += 0;
        }
    }

    radios = document.getElementsByName("q5");
    document.getElementById("displayQuestion5").innerHTML = document.getElementById("question5").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == CorrectAnswers[4]) {
                document.getElementById("displayAnswer5").innerHTML = "you've chosen the correct answer. It's The Curious Case of Benjamin Button";
                marks += 2;
            } else {
                document.getElementById("displayAnswer5").innerHTML = "Incorrect answer. Correct Answer is The Curious Case of Benjamin Button";
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer5").innerHTML = "You didn't choose an answer. Correct Answer is The Curious Case of Benjamin Button";
            marks += 0;
        }
    }

    radios = document.getElementsByName("q6");
    document.getElementById("displayQuestion6").innerHTML = document.getElementById("question6").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == CorrectAnswers[5]) {
                document.getElementById("displayAnswer6").innerHTML = "you've chosen the correct answer. It's Chicken";
                marks += 2;
            } else {
                document.getElementById("displayAnswer6").innerHTML = "Incorrect answer. Correct Answer is Chicken";
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer6").innerHTML = "You didn't choose an answer. Correct Answer is Chicken";
            marks += 0;
        }
    }

    radios = document.getElementsByName("q7");
    document.getElementById("displayQuestion7").innerHTML = document.getElementById("question7").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == CorrectAnswers[6]) {
                document.getElementById("displayAnswer7").innerHTML = "you've chosen the correct answer. It's Chicago";
                marks += 2;
            } else {
                document.getElementById("displayAnswer7").innerHTML = "Incorrect answer. Correct Answer is Chicago";
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer7").innerHTML = "You didn't choose an answer. Correct Answer is Chicago";
            marks += 0;
        }
    }

    radios = document.getElementsByName("q8");
    document.getElementById("displayQuestion8").innerHTML = document.getElementById("question8").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == CorrectAnswers[7]) {
                document.getElementById("displayAnswer8").innerHTML = "you've chosen the correct answer. It's Child's Play";
                marks += 2;
            } else {
                document.getElementById("displayAnswer8").innerHTML = "Incorrect answer. Correct Answer is Child's Play";
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer8").innerHTML = "You didn't choose an answer. Correct Answer is Child's Play";
            marks += 0;
        }
    }

    radios = document.getElementsByName("q9");
    document.getElementById("displayQuestion9").innerHTML = document.getElementById("question9").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == CorrectAnswers[8]) {
                document.getElementById("displayAnswer9").innerHTML = "you've chosen the correct answer. It's Up";
                marks += 2;
            } else {
                document.getElementById("displayAnswer9").innerHTML = "Incorrect answer. Correct Answer is Up";
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer9").innerHTML = "You didn't choose an answer. Correct Answer is Up";
            marks += 0;
        }
    }

    radios = document.getElementsByName("q10");
    document.getElementById("displayQuestion10").innerHTML = document.getElementById("question10").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == CorrectAnswers[9]) {
                document.getElementById("displayAnswer10").innerHTML = "you've chosen the correct answer. It's The Return of the King";
                marks += 2;
            } else {
                document.getElementById("displayAnswer10").innerHTML = "Incorrect answer. Correct Answer is The Return of the King";
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer10").innerHTML = "You didn't choose an answer. Correct Answer is The Return of the King";
            marks += 0;
        }
    }

    radios = document.getElementsByName("q5");
    document.getElementById("displayQuestion5").innerHTML = document.getElementById("question5").innerHTML;
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            (radios[i].value);
            if (radios[i].value == CorrectAnswers[4]) {
                document.getElementById("displayAnswer5").innerHTML = "you've chosen the correct answer. It's The Curious Case of Benjamin Button";
                marks += 2;
            } else {
                document.getElementById("displayAnswer5").innerHTML = "Incorrect answer. Correct Answer is The Curious Case of Benjamin Button";
                marks -= 1;
            }
            break;
        } else {
            document.getElementById("displayAnswer5").innerHTML = "You didn't choose an answer. Correct Answer is The Curious Case of Benjamin Button";
            marks += 0;
        }
    }

    if (marks >= 15) {
        document.body.style.backgroundColor = "lawngreen";
    } else if (marks >= 10) {
        document.body.style.backgroundColor = "lightseagreen";
    } else if (marks >= 5) {
        document.body.style.backgroundColor = "orange";
    } else if (marks > 0) {
        document.body.style.backgroundColor = "yellow";
    } else {
        document.body.style.backgroundColor = "indianred";
    }

    var m = marks.toString();
    document.getElementById("displayMarks").innerHTML = "You Have Scored: " + m;

}




