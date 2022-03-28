package com.company.day_03;

public class StudentDemo {
    public static void main(String[] args) {
        Student student = new Student();
        String name= student.name;
        int age=student.age;

        name="火神山";
        age=10000;
        System.out.println(name);
        System.out.println(age);

        student.eat();
        student.study();


    }
}
