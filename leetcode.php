<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?='Leetcode'?></title>
</head>
<body>
    <?php
    class Solution {
        static function isPalindrome($x) {
            return strrev(strval($x))==strval($x);
        }
    }
    echo Solution::isPalindrome(121)
    ?>
</body>
</html>