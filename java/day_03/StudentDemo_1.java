package com.company.day_03;

public class StudentDemo_1 {
    public static void main(String[] args) {
    Student_1 stu=new Student_1();
   Student_1 stu1=new Student_1("王菲",30);
    stu.setName("邓紫棋");
    stu.setAge(20);

    String name=stu.getName();
    int age=stu.getAge();

     String s=stu.toString();
        System.out.println(s);
        System.out.println(stu1);
    }
}
