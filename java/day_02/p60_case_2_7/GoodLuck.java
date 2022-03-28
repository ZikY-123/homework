package com.yangbo.day_02.p60_case_2_7;

import java.util.Random;
import java.util.Scanner;

public class GoodLuck {
    static String[] users = new String[3];
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        for (int i = 0; i < 3; i++) {
            System.out.println("请输入第" + (i + 1) + "个观众姓名");
            users[i] = scanner.nextLine();
        }
        for (int i = 0; i < users.length; i++) {
            System.out.println("第" + (i + 1) + "个观众姓名是" + users[i]);
        }
        Random random = new Random();
        int luckNmb = random.nextInt(users.length);
        System.out.println("幸运观众是" + users[luckNmb]);
    }
}
