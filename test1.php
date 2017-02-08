<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Calculate the factorial of a number.</title>
</head>
<body>
</body>
</html>
JavaScript Code :

function factorial(x) 
{ 

  if (x === 0)
 {
    return 1;
 }
  return x * factorial(x-1);
         
}
console.log(factorial(5));