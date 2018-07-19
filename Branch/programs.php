<?php
include "../includes/connection_with_database.php";
if(!isset($_SESSION['email_of_user']))
    {	
    header('location:../login.php');
    exit();
	}
if(!empty($_SESSION['succesfully_set'])){
	?>
	<script>alert ("Password resetting successful");</script>
	<?php
	unset($_SESSION['succesfully_set']);
}
						  if(!empty($_SESSION['succesfully_changed'])){
							 ?>
							 <script>
							 alert("Passwords Changed Successfully.");
							 </script>
						     	<?php
                                unset($_SESSION['succesfully_changed']);}
?>


<DOCTYPE html>
<html>
   <head>
   <title>KeyNotes</title>
   <meta charset="UTF-8">
   <meta name="description" content="Study Notes,Practical Files and Question papers">
   <meta name="keywords" content="Notes,Files,Ready_go_study">
   <meta name="author" content="Ashish Dhinwa">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         
		 
		   <!--Preloader-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
         <link rel="stylesheet" href="../cssspin/css/style.css">
	     <script src="../cssspin/js/index.js"></script>
		 <!--Preloader-->
		 
		 
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/index1.css">
		<link rel="stylesheet" type="text/css" href="../css/programs.css">
        
		
		
		       <!--FB_LIKE&SHARE_script-->
			  <?php
			  include "../includes/likeshare_script.php";
			  ?>
			  <!--FB_LIKE&SHARE-->
  </head>
   
<body>
     <?php
  include "../includes/wrapper.php";
  ?>
  <div id="content">
  <?php
  include "../includes/header2.php";
  ?>
   
  <!--FB_LIKE&SHARE-->
     <?php
	 include "../includes/likeshare_button.php";
	 ?>
    <!--FB_LIKE&SHARE-->
  
  

   
 <?php
  include "../includes/fetchname_to_print.php";
  ?>
 
  <h5 style="margin-top:-5px;margin-bottom:-5px;color:black;">Search for the code</h5>
  </center>
  <hr>
  
  
   <div class="container-fluid">
				<div  class="row" > 
				<div class="col-md-5 col-sm-6  modify"  >
				<center><h3><strong><b>Arrays</b></strong></h3></center>
				<hr  style="height:2px;border:none;color:#333;background-color:#333;width:105%;margin-left:-8px;">
				<a href="../Codes/Chapter2/P2_1.c"><h5>1.Program to input values into an array and display them</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_2.c"><h5>2.Program to find the largest and smallest number in an array</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_3.c"><h5>3.Program to reverse the elements of an array</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_4.c"><h5>4.Program to pass array elements to a function</h5></a>
				<hr>
				
				<a href="../Codes/Chapter2/P2_5.c"><h5>5.Program to pass an array to a function</h5></a>
			  <hr>
				<a href="../Codes/Chapter2/P2_6.c"><h5>6.Program to input and display a matrix</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_7.c"><h5>7.Program for addition of two matrices</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_8.c"><h5>8.Program for multiplication of two matrices</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_9.c"><h5>9.Program to dereference pointer variables</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_10.c"><h5>10.Program to understand pointer to pointer</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_11.c"><h5>11.Program to print the value and address of the elements of an array</h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter2/P2_12.c"><h5>12.Program to print the value and address of elements of an array using pointer notation</h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter2/P2_13.c"><h5>13.Call by value</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_14.c"><h5>14.Call by reference</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_15.c"><h5>15.Program to show how to return more than one value from a function using call by reference</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_16.c"><h5>16.Program to show a function that returns pointer</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_17.c"><h5>17.Program to show that changes to the array made inside the function affect the original array</h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter2/P2_18.c"><h5>18.When an array is passed to a function, the receiving argument is declared as a pointer</h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter2/P2_19.c"><h5>19.Array of pointers</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_20.c"><h5>20.Program to understand dynamic allocation of memory</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_21.c"><h5>21.Program to understand the use of realloc() function</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_22.c"><h5>22.Program to display the values of structure members</h5></a>
				<hr>
				<a href="../Codes/Chapter2/P2_23.c"><h5>23.Program to assign a structure variable to another structure variable</h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter2/P2_24.c"><h5>24.Program to understand array of structures</h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter2/P2_25.c"><h5>25.Program to understand arrays within structures</h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter2/P2_26.c"><h5>26.Program to understand pointers to structures</h5></a>
			    <hr>
				<hr>
				<a href="../Codes/Chapter2/P2_27.c"><h5>27.Program to understand how structure members are sent to a function</h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter2/P2_28.c"><h5>28.Program to understand how a structure variable is sent to a function </h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter2/P2_29.c"><h5>29.Program to understand how a pointer to structure variable is sent to a function</h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter2/P2_30.c"><h5>30.Program to understand how a structure variable is returned from a function</h5></a>
			    <hr>
				<hr>
				<a href="../Codes/Chapter2/P2_31.c"><h5>31.Program to understand how a pointer to structure is returned from a function</h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter2/P2_32.c"><h5>32.Program to understand how an array of structures is sent to a function</h5></a>
				<hr>

				
				<hr style="margin-top:23px;">
				</div>
				
			
                
				
				<div class="col-md-5 col-sm-6  modify modify1">
				<center ><h3 ><strong><b>Linked List</b></strong></h3></center>
				<hr  style="height:2px;border:none;color:#333;background-color:#333;width:105%;margin-left:-7px;">
				  <a href="../Codes/Chapter3/P3_1.c"><h5>1.Program of single linked list</h5><a>
				    <hr>
					<a href="../Codes/Chapter3/P3_2.c"><h5>2.Program of doubly linked list</h5><a>
					  <hr>
					  <a href="../Codes/Chapter3/P3_3.c"><h5>3.Program of circular linked list</h5><a>
					    <hr>
						<a href="../Codes/Chapter3/P3_4.c"><h5>4.Program of single linked list with header node</h5><a>
						  <hr>
						  <a href="../Codes/Chapter3/P3_5.c"><h5>5.Program of sorted linked list</h5><a>
						    <hr>
							<a href="../Codes/Chapter3/P3_6.c"><h5>6.Program of sorting a single linked list</h5><a>
							  <hr>
							  <a href="../Codes/Chapter3/P3_7.c"><h5>7.Program of merging two sorted single linked lists</h5><a>
							    <hr>
								<a href="../Codes/Chapter3/P3_8.c"><h5>8.Program to concatenate two single linked lists</h5><a>
								  <hr>
								  <a href="../Codes/Chapter3/P3_9.c"><h5>9.Program to concatenate two circular linked lists</h5><a>
								    <hr>
									<a href="../Codes/Chapter3/P3_10.c"><h5>10.Program of polynomial addition and multiplication using linked list</h5><a>
                                   <hr>
				<a href="../Codes/Exercise_Chapter3/E1_E2.c"><h5>11.To count number of occurrences of an element in a single linked list<br>
			                                                    12.To find the smallest and largest element in a single linked list</h5></a>
			     <hr>
			    <a href="../Codes/Exercise_Chapter3/E3_E4_E5.c"><h5>13.To check whether two single linked lists are identical<br>
                                                                14.To create a copy of a single linked list<br>
                                                                15.To create a reverse list</h5></a>
				<hr>
				
				<a href="../Codes/Exercise_Chapter3/E6.c"><h5>16.Swapping adjacent elements </h5></a>
				<hr>
				 <a href="../Codes/Exercise_Chapter3/E7.c"><h5>17.Swap Adjacent elements in a double linked list</h5></a>
				<hr>
			    <a href="../Codes/Exercise_Chapter3/E8.c"><h5> 18.Swap First and last elements of a single linked list</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter3/E9_E10.c"><h5>19.Move the largest element to the end of a single linked list.<br>
                                                              20.Move the smallest element to the beginning of a single linked list.</h5></a>
				<hr>
				
				 <a href="../Codes/Exercise_Chapter3/E11.c"><h5>21.Delete all nodes that have value n </h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter3/E12.c"><h5>22.Print a list according to other list</h5></a>
				<hr>
			    <a href="../Codes/Exercise_Chapter3/E13_E14.c"><h5>23.Remove first node of the list and insert it at the end <br>
                                                                   24.Remove the last node of the list and insert it in the beginning</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter3/E15.c"><h5>25.Program to move a node forward n positions</h5></a>
				<hr>
				 <a href="../Codes/Exercise_Chapter3/E16.c"><h5>26.Delete a node when pointer to it is given </h5></a>
				<hr>
			    <a href="../Codes/Exercise_Chapter3/E17.c"><h5>27.Functions to insert a node just before and just after a node pointed to by a pointer p, without using the pointer start</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter3/E18.c"><h5>28.Program to free all nodes of a single linked list</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter3/E19.c"><h5>29.Program to delete duplicates from a sorted linked list</h5></a>
			   <hr>
			    <a href="../Codes/Exercise_Chapter3/E20.c"><h5>30.Program to delete all dupliactes from an unsorted single linked list</h5></a>
                <hr>
				<a href="../Codes/Exercise_Chapter3/E21_E22.c"><h5>31.Intersection of two single linked list<br>
				                                                 32.Union of two single linked lists</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter3/E23.c"><h5>33.Delete all the nodes having negative numbers in info part from the list L1 and insert them into list L2 
                          No new nodes to be allocated.</h5></a>
				<hr>
				 <a href="../Codes/Exercise_Chapter3/E24.c"><h5>34.make two linked lists one having the even numbers of L1 and the other having the odd numbers of L1</h5></a>
				<hr>
			    <a href="../Codes/Exercise_Chapter3/E25.c"><h5>35.Delete alternate nodes(even numbered nodes) from a single linked list</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter3/E26.c"><h5>36.get the nth node from the end of a single linked list</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter3/E27.c"><h5>37.Detecting and Removing a cycle in a single linked list </h5></a>
				<hr>
			    <a href="../Codes/Exercise_Chapter3/E28.c"><h5>38.To find the middle node in a single linked list</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter3/E29.c"><h5>39.Split a single linked list into two halves</h5></a>
				<hr>
				 <a href="../Codes/Exercise_Chapter3/E30.c"><h5>40.Split a single linked list into two lists at a given node</h5></a>
				<hr>
			    <a href="../Codes/Exercise_Chapter3/E31.c"><h5>41.split a single linked list into two lists such that alternate nodes go to different lists</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter3/E32.c"><h5>42.Program to combine alternate nodes of two single linked lists</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter3/E33.c"><h5>43.To find merge point of two single linked lists </h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter3/E34.c" id="stack_queue"><h5>44.Adding and creating a list</h5></a>
				<hr>
			    <a href="../Codes/Exercise_Chapter3/E36.c" ><h5>45.Palindrome</h5></a>
				<hr>
				</div>
		        </div>

                
				
				
				
				
				<div class="row" > 
				<div class="col-md-5 col-sm-6  modify"  >
				<center><h3 ><strong><b>Stacks & Queues</b></strong></h3></center>
				<hr  style="height:2px;border:none;color:#333;background-color:#333;width:105%;margin-left:-8px;">
				<a href="../Codes/Chapter4/P4_1.c"><h5>1.Program of stack using array</h5></a>
				<hr>
				<a href="../Codes/Chapter4/P4_2.c"><h5>2.Program of stack using linked list</h5></a>
				<hr>
				<a href="../Codes/Chapter4/P4_3.c"><h5>3.Program of queue using array</h5></a>
				<hr>
				<a href="../Codes/Chapter4/P4_4.c"><h5>4.Program of queue using linked list</h5></a>
				<hr>
				<a href="../Codes/Chapter4/P4_5.c"><h5>5.Program of queue using circular linked list</h5></a>
				<hr>
				<a href="../Codes/Chapter4/P4_6.c"><h5>6.Program of circular queue</h5></a>
				<hr>
				<a href="../Codes/Chapter4/P4_7.c"><h5>7.Program of deque using circular array</h5></a>
				<hr>
				<a href="../Codes/Chapter4/P4_8.c"><h5>8.Program of priority queue using linked list</h5></a>
				<hr>
				<a href="../Codes/Chapter4/P4_9.c"><h5>9.Program of reversing a string using stack</h5></a>
				<hr>
				<a href="../Codes/Chapter4/P4_10.c"><h5>10.Program to check nesting of parentheses using stack</h5></a>
				<hr>
				<a href="../Codes/Chapter4/P4_11.c"><h5>11.Program for conversion of infix to postfix and evaluation of postfix.
                 It will evaluate only single digit numbers</h5></a>
				<hr>
				<a  href="../Codes/Exercise_Chapter4/E15_E16.c"><h5>12.Program to convert a decimal number into binary using stack<br>
			                                                        13.Program to print all the prime factors of a number in descending order using stack</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter4/E17.c"><h5>14.Program for conversion of infix to prefix and evaluation of prefix.
                        It will take only single digit in expression</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter4/E20.c"><h5>15.Program for conversion of postfix to prefix</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter4/E21.c"><h5>16.Program for conversion of prefix to postfix</h5></a>
				<hr>
				<hr>
				<hr>
				</div>
				
                
				
				<div class="col-md-5 col-sm-6  modify modify1">
				<center><h3 ><strong><b>Recursion</b></strong></h3></center>
				<hr  style="height:2px;border:none;color:#333;background-color:#333;width:105%;margin-left:-7px;">
				<a href="../Codes/Chapter5/P5_1.c"><h5>1.Program to find the factorial of a number by recursive method</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_2.c"><h5>2.Program to display numbers from 1 to n and their sum</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_3.c"><h5>3.Program to display and find out the sum of series</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_4.c"><h5>4.Program to display integer as sequence of digits and find sum of its digits</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_5.c"><h5>5.Program to convert a positive decimal number to Binary, Octal or Hexadecimal</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_6.c"><h5>6.Program to raise a floating point number to a positive integer</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_7.c"><h5>7.Program to print the prime factors</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_8.c"><h5>8.Program to find GCD of two numbers</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_9.c"><h5>9.Program to generate fibonacci series</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_10.c"><h5>10.Program that tests whether a number is divisible by 11 and 9 or not</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_11.c"><h5>11.Program to solve Tower of  Hanoi problem using recursion</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_12.c"><h5>12. Strings and recursion</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_13.c"><h5>13.Linked list and Recursion</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_14.c"><h5>14.Program to find the factorial of a number by tail recursive method</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_15.c"><h5>15.Program to search an element through for binary search</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_16.c" id="trees"><h5>16.Program to input values into an array and display them</h5></a>
				<hr>
				<a href="../Codes/Chapter5/P5_17.c"><h5>17.Program to input values into an array and display them</h5></a>
				<hr>
				
				
				
				</div>
		        </div>
				
				
				
				
				
				<div class="row" > 
				<div class="col-md-5 col-sm-6  modify"  >
				<center><h3><strong><b>Trees</b></strong></h3></center>
				<hr  style="height:2px;border:none;color:#333;background-color:#333;width:105%;margin-left:-8px;">
				<a href="../Codes/Chapter6/P6_1.c"><h5>1.Program to construct a binary tree from inorder and preorder</h5></a>
				<hr>
				<a href="../Codes/Chapter6/P6_2.c"><h5>2.Program for constructing a binary tree from inorder and postorder</h5></a>
				<hr>
				<a href="../Codes/Chapter6/P6_3.c"><h5>3.Recursive operations in Binary Search Tree</h5></a>
				<hr>
				<a href="../Codes/Chapter6/P6_4.c"><h5>4.Non recursive operations in Binary Search Tree</h5></a>
				<hr>
				<a href="../Codes/Chapter6/P6_5.c"><h5>5.Insertion, Deletion and Traversal in fully in-threaded Binary Search Tree</h5></a>
				<hr>
				<a href="../Codes/Chapter6/P6_6.c"><h5>6.Program of AVL tree</h5></a>
				<hr>
				<a href="../Codes/Chapter6/P6_7.c"><h5>7.Program of Red black tree</h5></a>
				<hr>
				<a href="../Codes/Chapter6/P6_8.c"><h5>8.Program for insertion and deletion in heap</h5></a>
				<hr>
				<a href="../Codes/Chapter6/P6_9.c"><h5>9. Program for performing various operations in a B-tree</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter6/E17_18_19_20_21_22_23.c"><h5>10.Size of a binary tree <br>
																				 11.Total number of leaf nodes in a binary tree <br>
														                         12.Minimum height <br>
																				 13.Destroy all the nodes of a binary tree.<br>
																				 14.Display all the ancestors of a node in a binary tree.<br>
																				 15.Display all root to leaf paths<br>
																				 16.Display a binary tree from left to right</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter6/E24_25_26.c"><h5>17.Copy of binary tree.<br>
																     18.Check whether two binary trees are similar or not.  <br> 
																     19.Check whether two Binary trees are identical or not. </h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter6/E27_28.c"><h5>20.Swap right and left children of a binary tree
																  21.Find whether two binary trees are mirror image of each other or not.</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter6/E29.c"><h5>22.Find whether a binary tree is binary search tree or not</h5></a>
				<hr>
				<a href="../Codes/Exercise_Chapter6/E30_31_32_33.c"><h5>23.Number of nodes at a level. 
																        24.Width of a binary tree.
																		25.Display nodes on a level from right to left. 
																		26.Traverse a tree in spiral order</h5></a>
				<hr>
				</div>
				
                
				
				<div class="col-md-5 col-sm-6  modify modify1">
				<center><h3><strong><b>Sorting</b></strong></h3></center>
				<hr  style="height:2px;border:none;color:#333;background-color:#333;width:105%;margin-left:-8px;">
				<a href="../Codes/Chapter8/P8_1.c"><h5>1.Program of sorting using selection sort</h5></a>
				<hr>
				<a href="../Codes/Chapter8/P8_2.c"><h5>2.Program of sorting using bubble sort</h5></a>
				<hr>
				<a href="../Codes/Chapter8/P8_3.c"><h5>3.Program of sorting using insertion sort</h5></a>
				<hr>
				<a href="../Codes/Chapter8/P8_4.c"><h5>4.Program of sorting using shell sort</h5></a>
				<hr>
				<a href="../Codes/Chapter8/P8_5.c"><h5>5.Program of merging two sorted arrays into a third sorted array</h5></a>
				<hr>
				<a href="../Codes/Chapter8/P8_6.c"><h5>6.Program of sorting using merge sort through recursion</h5></a>
				<hr>
				<a href="../Codes/Chapter8/P8_7.c"><h5>7.Program of sorting using merge sort without recursion</h5></a>
				<hr>
				<a href="../Codes/Chapter8/P8_8.c"><h5>8.Program of merge sort for linked lists</h5></a>
				<hr>
				<a href="../Codes/Chapter8/P8_9.c"><h5>9.Program of sorting using quick sort</h5></a>
				<hr>
				<a href="../Codes/Chapter8/P8_10.c"><h5>10.Binary tree Sort</h5></a>
				<hr>
				<a href="../Codes/Chapter8/P8_11.c"><h5>11. Program of sorting through heapsort</h5></a>
				<hr>
				<a href="../Codes/Chapter8/P8_12.c"><h5>12.Program of sorting using radix sort</h5></a>
				<hr>
				
				<a href="../Codes/Chapter8/P8_13.c"><h5>13.Program of sorting using address calculation sort</h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter8/P8_14.c"><h5>14. Program of sorting records using bubble sort algorithm</h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter8/P8_15.c"  id="graphs"><h5>15.Program to sort the records on different keys using bubble sort</h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter8/P8_16.c"><h5>16.Program of sorting by address using bubble sort algorithm</h5></a>
				<hr>
				<hr style="margin-top:29px;">
				
				
				
				
				</div>
		        </div>
				
				
				
				
				
				<div class="row" > 
				<div class="col-md-5 col-sm-6  modify"  >
				<center><h3><strong><b>Graphs</b></strong></h3></center>
				<hr  style="height:2px;border:none;color:#333;background-color:#333;width:105%;margin-left:-7px;">
				<a href="../Codes/Chapter7/P7_1.c"><h5>1.Program for creation of adjacency matrix</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_2.c"><h5>2.Program for addition and deletion of edges in a directed graph using adjacency matrix</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_3.c"><h5>3.Program for insertion and deletion of vertices and edges in a directed </h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_4.c"><h5>4.Program to find out the path matrix by powers of adjacency matrix</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_5.c"><h5>5.Program to find path matrix by Warshall's algorithm</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_6.c"><h5>6. Program for traversing a directed graph through BFS, 
                                                         visiting only those vertices that are reachable from start vertex</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_6a.c"><h5>7. Program for traversing a graph through BFS, visiting all the all vertices</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_6b.c"><h5>8.Program for traversing a directed graph through BFS, and finding shortest distance and shortest path of any vertex fromstart vertex</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_6c.c"><h5>9.Program for traversing a directed graph through BFS, and showing all the tree edge</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_6d.c"><h5>10.Program for traversing an UNDIRECTED graph through BFS</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_6e.c"><h5>11.Program to find whether an undirected graph is connected or not</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_6f.c"><h5>12.Program to find connected components in an undirected graph</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_7.c"><h5>13.Program for traversing a directed graph through DFS, visiting only vertices reachable from start vertex</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_7a.c"><h5>14.Program for traversing a directed graph through DFS,visiting all the vertices</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_7b.c"><h5>15.Program for traversing a directed graph through DFS, showing all tree edges and predecessors of all vertices</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_7c.c"><h5>16.Program for traversing an UNDIRECTED graph through DFS, visiting all the vertices</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_8.c"><h5>17.Program for traversing a directed graph through DFS recursively</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_8a.c"><h5>18.Program for traversing a directed graph through DFS recursively, with comments displayed in the output</h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter7/P7_8b.c"><h5>19.Program for traversing a directed graph through DFS recursively,each vertex is assigned a discovery and a finishing time</h5></a>
				<hr>
				
				<a href="../Codes/Chapter7/P7_8c.c"><h5>20.Program for traversing a directed graph through DFS and classifying all edges</h5></a>
				<hr>
				
				<a href="../Codes/Chapter7/P7_8d.c"><h5>21.Program to find whether a directed graph is cyclic or not</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_8e.c"><h5>22.Program for traversing an undirected graph through DFS recursively</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_8f.c"><h5>23.Program for traversing an undirected graph through DFSand classifying edges as tree edges and back edges</h5></a>
				<hr>
				<hr>
				<a href="../Codes/Chapter7/P7_8g.c"><h5>24.Program to find whether an undirected graph is cyclic or not</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_9.c"><h5>25.Program to find shortest distances using Dijkstra's algorithm</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_10.c"><h5>26.Program to find shortest paths using Bellman-Ford algorithm</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_11.c"><h5>27.Program to find shortest path matrix by Modified Warshall's algorithm</h5></a>
				<hr>

				<a href="../Codes/Chapter7/P7_12.c"><h5>28.Program for creating minimum spanning tree using Prim's algorithm</h5></a>
				<hr>
			    <a href="../Codes/Chapter7/P7_13.c"><h5>29.Program for creating a minimum spanning tree by Kruskal's algorithm</h5></a>
				<hr>				
				<a href="../Codes/Chapter7/P7_14.c"><h5>30.Program for topological sorting</h5></a>
				<hr style="margin-top:7px;">	
				</div>
				
                
				
				<div class="col-md-5 col-sm-6  modify modify1">
				<center><h3><strong><b>Searching & Hashing</b></strong></h3></center>
				<hr  style="height:2px;border:none;color:#333;background-color:#333;width:105%;margin-left:-7px;">
				<a href="../Codes/Chapter9/P9_1.c"><h5>1.Sequential search in an array</h5></a>
				<hr>
				<a href="../Codes/Chapter9/P9_2.c"><h5>2.Sequential search in an array using sentinel</h5></a>
				<hr>
				<a href="../Codes/Chapter9/P9_3.c"><h5>3.Sequential search in a sorted array</h5></a>
				<hr>
				<a href="../Codes/Chapter9/P9_4.c"><h5>4.Binary search in an array</h5></a>
				<hr>
				<a href="../Codes/Chapter9/P9_5.c"><h5>5.Recursive binary search in an array</h5></a>
				<hr>
				<a href="../Codes/Chapter9/P9_6.c"><h5>6.Linear probing</h5></a>
				<hr>
				<a href="../Codes/Chapter9/P9_7.c" id="demo_t"><h5>7.Quadrtic probing</h5></a>
				<hr>
				<a href="../Codes/Chapter9/P9_8.c" ><h5>8.Double hashing</h5></a>
				<hr>
				<a href="../Codes/Chapter9/P9_9.c"><h5>9.Separate chaining</h5></a>
				<hr style="height:3px;border:none;color:#333;background-color:#333;width:105%;margin-left:-7px;margin-top:10px;">
				<center><h3><strong><b>Demo Programs-Trees</b></strong></h3></center>
				<hr style="height:3px;border:none;color:#333;background-color:#333;width:105%;margin-left:-7px;margin-top:10px;">
				<a href="../Codes/Chapter6/Demo_AVL_tree.c"><h5>1.Demo Program of AVL tree</h5></a>
				<hr>
				<a href="../Codes/Chapter6/Demo_Rec_BST.c" id="demo_g"><h5>2.Recursive operations in Binary Search Tree</h5></a>
				<hr>
				<a href="../Codes/Chapter6/Demo_RedBlack.c"><h5>3.Program of Red black tree</h5></a>
				<hr>
				<hr style="height:3px;border:none;color:#333;background-color:#333;width:105%;margin-left:-7px;margin-top:10px;">
				<center><h3 ><strong><b>Demo Programs-Graphs</b></strong></h3></center>
				<hr style="height:3px;border:none;color:#333;background-color:#333;width:105%;margin-left:-7px;margin-top:10px;">
				<a href="../Codes/Chapter7/P7_Demo_BellmanFord.c"><h5>1.Demo Program to find shortest paths using Bellman-Ford algorithm</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_Demo_dijkstras.c"><h5>2. Demo Program to find shortest distances using Dijkstra's algorithm</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_Demo_Kruskals.c"><h5>3. Demo Program for creating a minimum spanning tree by Kruskal's algorithm</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_Demo_ModifiedWarshalls.c"><h5>4.Demo Program to find shortest path matrix by Modified Warshall's algorithm</h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_Demo_Prims.c"  id="demo_s"><h5>5. Program for creating minimum spanning tree using Prim's algorithm </h5></a>
				<hr>
				<a href="../Codes/Chapter7/P7_Demo_ToplogicalSort.c"><h5>6. Demo Program for topological sorting</h5></a>
				<hr>
				<hr style="height:3px;border:none;color:#333;background-color:#333;width:105%;margin-left:-7px;margin-top:10px;">
				<center><h3><strong><b>Demo Programs-Sorting</b></strong></h3></center>
				<hr style="height:3px;border:none;color:#333;background-color:#333;width:105%;margin-left:-7px;margin-top:10px;">
				<a href="../Codes/Chapter8/Demo_ADDR_CAL.c"><h5>1.Demo Program of sorting using address calculation sort</h5></a>
				<hr>
				<a href="../Codes/Chapter8/Demo_BUBBLE.c"><h5>2.Demo Program of sorting using bubble sort</h5></a>
				<hr>
				<a href="../Codes/Chapter8/Demo_HEAPSORT.c"><h5>3.Demo Program of sorting through heapsort</h5></a>
				<hr>
				<a href="../Codes/Chapter8/Demo_INSERTION.c"><h5>4.Demo Program of sorting using insertion sort</h5></a>
				<hr>
				<a href="../Codes/Chapter8/Demo_MERGE.c"><h5>5.Demo Program of merging two sorted arrays into a third sorted array</h5></a>
				<hr>
				<a href="../Codes/Chapter8/Demo_MRGSORT.c"><h5>6.Demo Program of sorting using merge sort without recursion</h5></a>
				<hr>
				<a href="../Codes/Chapter8/Demo_MSORTREC.c"><h5>7.Demo Program of sorting using merge sort through recursion</h5></a>
				<hr>
				<a href="../Codes/Chapter8/Demo_QUICK.c"><h5>8.Demo Program of sorting using quick sort</h5></a>
				<hr>
				<a href="../Codes/Chapter8/Demo_RADIX.c"><h5>9.Demo Program of sorting using radix sort</h5></a>
				<hr>
				<a href="../Codes/Chapter8/Demo_SELECTION.c"><h5>10.Demo Program of sorting using selection sort</h5></a>
				<hr>
				<a href="../Codes/Chapter8/Demo_SHELL.c"><h5>11.Demo Program of sorting using shell sort</h5></a>
				<hr>
				</div>
		        </div>		
				</div>
  
  <div class="container">
  <hr style="height:1px;border:none;color:#333;background-color:#333;margin-top:60px;" ><hr/>
  </div>
  
  <?php
  include "../includes/footer.php";
  ?>
  </div>
</body>
   <script  src="../cssspin/js/index.js"></script>
</html>