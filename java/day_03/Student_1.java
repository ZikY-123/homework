package com.company.day_03;

public class Student_1 {
    private String name;
    private int age;
    public Student_1(){
    System.out.println("这是一个无参构造的方法");
    }
    public Student_1(String name,int age){
    this.name=name;
    this.age=age;
    }
    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public int getAge() {
        return age;
    }

    public void setAge(int age) {
        this.age = age;
    }

    @Override
    public String toString() {
        return "Student_1{" +
                "name='" + name + '\'' +
                ", age=" + age +
                '}';
    }
}
