<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exponent of a number</title>
</head>
<body>

</body>
</html>
JavaScript Code :

var exponent = function(a, n) 
{
   if (n === 0) 
   {
    return 1;
    }
  else 
  {
    return a * exponent(a, n-1);
  }
};

console.log(exponent(4, 2));