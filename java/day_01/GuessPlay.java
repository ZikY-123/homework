package com.yangbo.day_01;

import java.util.Random;
import java.util.Scanner;

public class GuessPlay {
    public static void main(String[] args) {
        guess();
    }
    static void guess() {
        Random radom = new Random();
        int randomNum = radom.nextInt(100) + 1;
        Scanner scanner = new Scanner(System.in);
        while (true) {
            System.out.println("请输入数字");
            int scannerNum = scanner.nextInt();
            if (scannerNum > randomNum) {
                System.out.println("猜大了");
            } else if (scannerNum == randomNum) {
                System.out.println("猜对了");
                break;
            } else {
                System.out.println("猜小了");
            }
        }
    }
}
