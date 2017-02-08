<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Recursive function to find the GCD of two numbers</title>
</head>
<body>

</body>
</html>
JavaScript Code :

var gcd = function(a, b) {
    if ( ! b) {
        return a;
    }

    return gcd(b, a % b);
};
console.log(gcd(2154, 458));