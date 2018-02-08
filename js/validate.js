function validateForm() {
    var x = document.forms["myForm"]["text"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    else {
        if (x.length > 250) {
            alert("String can't be longer than 250 charaters. You have: " + x.length);
            return false;
        }
        if (x.search('palindrome') != -1) {
            alert("The input can't contain the word 'palindrome'");
            return false;
        }
        if (x.split('').reverse().join('') == x) {
            alert("The input can't be a palindrome");
            return false;
        }
    }
}