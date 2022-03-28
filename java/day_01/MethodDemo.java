package com.yangbo.day_01;

public class MethodDemo {
    public static void main(String[] args) {
        int result = add(5, 6);
        System.out.println("结果是" + result);
    }
    public static int add(int i, int j) {
        return i + j;
    }
}
