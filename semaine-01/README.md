# Week 1 - PHP Fundamentals Summary

## 📚 Overview

Welcome to Week 1 of PHP learning! This week covers the fundamental concepts of PHP programming, providing you with a solid foundation to build upon. By the end of this week, you'll understand the basics of PHP syntax, variables, data types, operators, and control structures.

---

## 🎯 Learning Objectives

By completing Week 1, you will be able to:

- ✅ Understand what PHP is and how it works
- ✅ Set up a PHP development environment
- ✅ Write and execute basic PHP scripts
- ✅ Work with variables and constants
- ✅ Understand and use PHP data types (strings, integers, floats, booleans, arrays)
- ✅ Perform operations using arithmetic, comparison, and logical operators
- ✅ Implement conditional statements (if, else, elseif, switch)
- ✅ Use loops effectively (for, while, do-while, foreach)
- ✅ Handle user input and output
- ✅ Debug basic PHP errors

---

## 📖 Lessons Overview

### Lesson 1: Introduction to PHP
- What is PHP?
- PHP history and evolution
- Server-side vs client-side scripting
- Setting up your development environment (XAMPP, WAMP, or local server)
- Your first PHP script: "Hello, World!"
- PHP syntax basics and embedding PHP in HTML

### Lesson 2: Variables and Data Types
- Declaring variables in PHP
- Variable naming conventions
- PHP data types:
  - String
  - Integer
  - Float (double)
  - Boolean
  - Array
  - NULL
- Type casting and type juggling
- Constants (define() and const)

### Lesson 3: Operators
- Arithmetic operators (+, -, *, /, %, **)
- Assignment operators (=, +=, -=, etc.)
- Comparison operators (==, ===, !=, !==, <, >, <=, >=)
- Logical operators (&&, ||, !)
- Increment/Decrement operators (++, --)
- String operators (., .=)

### Lesson 4: Control Structures
- Conditional statements:
  - if statement
  - if-else statement
  - if-elseif-else statement
  - switch statement
  - Ternary operator
- Best practices for writing conditions

### Lesson 5: Loops
- for loop
- while loop
- do-while loop
- foreach loop (for arrays)
- Loop control statements (break, continue)
- Nested loops

---

## 🔑 Key Concepts Recap

### PHP Basics
```php
<?php
// This is a single-line comment

/*
 * This is a multi-line comment
 */

// Every PHP statement ends with a semicolon
echo "Hello, World!";
?>
```

### Variables and Data Types
```php
<?php
// Variables start with $
$name = "John Doe";           // String
$age = 25;                    // Integer
$height = 1.75;               // Float
$isStudent = true;            // Boolean
$courses = ["PHP", "MySQL"];  // Array

// Constants
define("PI", 3.14159);
const SITE_NAME = "Learn PHP";
?>
```

### Operators Examples
```php
<?php
// Arithmetic
$sum = 10 + 5;        // 15
$product = 10 * 5;    // 50

// Comparison
$isEqual = (5 == "5");   // true (loose comparison)
$isIdentical = (5 === "5"); // false (strict comparison)

// Logical
$result = (true && false);  // false
$result = (true || false);  // true
?>
```

### Control Structures
```php
<?php
// If-else statement
if ($age >= 18) {
    echo "Adult";
} else {
    echo "Minor";
}

// Switch statement
switch ($grade) {
    case "A":
        echo "Excellent";
        break;
    case "B":
        echo "Good";
        break;
    default:
        echo "Keep trying";
}
?>
```

### Loops
```php
<?php
// For loop
for ($i = 0; $i < 5; $i++) {
    echo $i . " ";
}

// While loop
$count = 0;
while ($count < 5) {
    echo $count . " ";
    $count++;
}

// Foreach loop
$fruits = ["Apple", "Banana", "Orange"];
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}
?>
```

---

## 🎓 Global Exercise: Student Grade Evaluation System

### Project Description
Create a comprehensive PHP application that evaluates student grades based on their scores across multiple subjects. This project combines all the concepts learned in Week 1.

### Requirements

#### Part 1: Student Information
Create variables to store the following student information:
- Student name
- Student ID
- Class/Grade level
- Academic year

#### Part 2: Subject Scores
Store scores for at least 5 subjects in an array:
- Mathematics
- English
- Science
- History
- Physical Education

Each score should be between 0 and 100.

#### Part 3: Calculations
Implement the following calculations:
1. **Total Score**: Sum of all subject scores
2. **Average Score**: Total score divided by number of subjects
3. **Percentage**: (Total score / Maximum possible score) × 100

#### Part 4: Grade Assignment
Assign a letter grade based on the average score:
- A: 90-100
- B: 80-89
- C: 70-79
- D: 60-69
- F: Below 60

#### Part 5: Status Determination
Determine the student's status:
- **Pass**: Average score >= 60
- **Fail**: Average score < 60
- **Honor Roll**: Average score >= 90
- **Needs Improvement**: Average score < 70

#### Part 6: Report Generation
Display a formatted report that includes:
- Student information
- List of subjects with scores
- Total score and average
- Letter grade
- Pass/Fail status
- Additional comments based on performance

### Sample Solution Structure

```php
<?php
// ==========================================
// STUDENT GRADE EVALUATION SYSTEM
// ==========================================

// Part 1: Student Information
$studentName = "Alice Johnson";
$studentId = "STU2026001";
$classLevel = "Grade 10";
$academicYear = "2025-2026";

// Part 2: Subject Scores
$subjects = [
    "Mathematics" => 85,
    "English" => 92,
    "Science" => 78,
    "History" => 88,
    "Physical Education" => 95
];

// Part 3: Calculations
$totalScore = 0;
$numberOfSubjects = count($subjects);

// Calculate total score
foreach ($subjects as $subject => $score) {
    $totalScore += $score;
}

$averageScore = $totalScore / $numberOfSubjects;
$maxPossibleScore = $numberOfSubjects * 100;
$percentage = ($totalScore / $maxPossibleScore) * 100;

// Part 4: Grade Assignment
if ($averageScore >= 90) {
    $letterGrade = "A";
    $gradeComment = "Excellent";
} elseif ($averageScore >= 80) {
    $letterGrade = "B";
    $gradeComment = "Good";
} elseif ($averageScore >= 70) {
    $letterGrade = "C";
    $gradeComment = "Satisfactory";
} elseif ($averageScore >= 60) {
    $letterGrade = "D";
    $gradeComment = "Needs Improvement";
} else {
    $letterGrade = "F";
    $gradeComment = "Failing";
}

// Part 5: Status Determination
$status = ($averageScore >= 60) ? "PASS" : "FAIL";
$isHonorRoll = ($averageScore >= 90) ? true : false;
$needsImprovement = ($averageScore < 70) ? true : false;

// Part 6: Report Generation
echo "==============================================\n";
echo "       STUDENT GRADE EVALUATION REPORT        \n";
echo "==============================================\n\n";

echo "Student Information:\n";
echo "--------------------\n";
echo "Name: $studentName\n";
echo "Student ID: $studentId\n";
echo "Class: $classLevel\n";
echo "Academic Year: $academicYear\n\n";

echo "Subject Scores:\n";
echo "--------------------\n";
foreach ($subjects as $subject => $score) {
    echo sprintf("%-25s: %3d/100\n", $subject, $score);
}

echo "\nPerformance Summary:\n";
echo "--------------------\n";
echo "Total Score: $totalScore / $maxPossibleScore\n";
echo "Average Score: " . round($averageScore, 2) . "\n";
echo "Percentage: " . round($percentage, 2) . "%\n";
echo "Letter Grade: $letterGrade ($gradeComment)\n";
echo "Status: $status\n";

if ($isHonorRoll) {
    echo "\n🏆 CONGRATULATIONS! Student is on the Honor Roll!\n";
}

if ($needsImprovement) {
    echo "\n⚠️  Student needs additional support and tutoring.\n";
}

echo "\nAdditional Comments:\n";
echo "--------------------\n";
if ($averageScore >= 90) {
    echo "Outstanding performance! Keep up the excellent work!\n";
} elseif ($averageScore >= 80) {
    echo "Great job! Continue to strive for excellence.\n";
} elseif ($averageScore >= 70) {
    echo "Good effort. Focus on improving weaker subjects.\n";
} elseif ($averageScore >= 60) {
    echo "You're passing, but there's significant room for improvement.\n";
} else {
    echo "Immediate attention required. Please meet with advisor.\n";
}

echo "\n==============================================\n";
?>
```

### Extension Challenges

Once you've completed the basic requirements, try these additional challenges:

1. **Subject-wise Analysis**: Identify the highest and lowest scoring subjects
2. **Multiple Students**: Modify the code to handle an array of multiple students
3. **Grade Distribution**: Count how many subjects fall into each grade category
4. **Weighted Scores**: Assign different weights to different subjects
5. **Interactive Input**: Use HTML forms to accept user input (requires basic HTML knowledge)
6. **Data Validation**: Add checks to ensure scores are between 0 and 100
7. **Trend Analysis**: Compare current performance with previous semester (add historical data)

### Testing Your Solution

Test your code with different scenarios:
- All subjects with perfect scores (100)
- All subjects with failing scores (below 60)
- Mixed scores across the grade spectrum
- Edge cases (exactly 60, exactly 90, etc.)

---

## 💡 Tips for Success

1. **Practice Daily**: Write code every day, even if it's just for 30 minutes
2. **Experiment**: Don't be afraid to modify examples and see what happens
3. **Debug**: Use `var_dump()` and `print_r()` to understand what your code is doing
4. **Comment Your Code**: Explain what each section does
5. **Follow Conventions**: Use consistent naming conventions and formatting
6. **Read Error Messages**: PHP error messages are helpful - learn to read them
7. **Test Incrementally**: Test your code after adding each new feature

---

## 📝 Additional Practice Exercises

1. **Temperature Converter**: Convert between Celsius, Fahrenheit, and Kelvin
2. **Simple Calculator**: Perform basic arithmetic operations based on user choice
3. **Number Guessing Game**: Generate a random number and provide hints
4. **Shopping Cart**: Calculate total price with discounts and tax
5. **BMI Calculator**: Calculate and categorize Body Mass Index

---

## 🔗 Resources

- [PHP Official Documentation](https://www.php.net/manual/en/)
- [W3Schools PHP Tutorial](https://www.w3schools.com/php/)
- [PHP The Right Way](https://phptherightway.com/)
- [PHP Tutorial for Beginners](https://www.php.net/manual/en/getting-started.php)

---

## ✅ Week 1 Checklist

Before moving to Week 2, ensure you can:
- [ ] Write and execute basic PHP scripts
- [ ] Declare and use variables correctly
- [ ] Work with different data types
- [ ] Use operators effectively
- [ ] Implement if-else statements
- [ ] Use switch statements appropriately
- [ ] Write all types of loops
- [ ] Complete the Student Grade Evaluation System project
- [ ] Understand and fix common PHP errors

---

## 🎉 Congratulations!

You've completed Week 1 of PHP fundamentals! You now have a solid foundation in PHP basics. Keep practicing, and get ready for Week 2 where we'll dive into functions, arrays manipulation, and more advanced concepts.

**Next Week Preview**: Functions, Advanced Arrays, String Manipulation, and Form Handling

---

*Created: 2026-01-11*  
*Repository: HermesOliho/learn-php*  
*Author: HermesOliho*