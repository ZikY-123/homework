package com.yangbo.day_01;

public class MethodDemo1 {
    public static void main(String[] args) {
        int[] aaa = caculat(5, 10, 15);
        System.out.println("加法运算结果是；" + aaa[0]);
        System.out.println("平均运算结果是；" + aaa[1]);
    }
    static int[] caculat(int a, int b, int c) {
        int sum = a + b + c;
        int ave = sum / 3;
        //int [] result = new int[] {sum, ave};
        return new int[]{sum, ave};
    }
}
