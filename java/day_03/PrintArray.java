package com.company.day_03;

import java.util.Arrays;

public class PrintArray {
    public static void main(String[] args) {
        System.out.println("面向过程的方式");
        int[] arr = {10,20,30,40,50,60};
        System.out.print("[");
        for (int i = 0; i < arr.length; i++) {
            if (i == arr.length - 1) {
                System.out.println(arr[i] + "]");
            } else {
                System.out.print(arr[i] + ",");
            }
        }
        System.out.println("===========");
        System.out.println("面向对象的方式");
        System.out.println(Arrays.toString(arr));
    }
}
