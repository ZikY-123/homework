package com.yangbo.day_04;

import java.util.ArrayList;
import java.util.Scanner;

public class LoginDemoArray {
    static ArrayList<String> names = new ArrayList<>();
    static ArrayList<String> pwds = new ArrayList<>();

    public static void main(String[] args) {
        names.add("admin");
        pwds.add("123456");
        label:
        while (true) {
            print();
            Scanner scanner = new Scanner(System.in);
            System.out.println("请选择功能");
            String fun = scanner.nextLine();
            switch (fun) {
                case "1":
                    enter();
                    break;
                case "2":
                    login();
                    break;
                case "3":
                    check();
                    break;
                case "4":
                    break label;
                default:
                    System.out.println("请重新输入");
                    break;
            }
        }
    }

    static void print() {
        System.out.println("-----登陆注册系统-----");
        System.out.println("1.登录");
        System.out.println("2.注册");
        System.out.println("3.查看");
        System.out.println("4.退出");
        System.out.println("--------------------");
    }

    static void enter() {
        System.out.println("请输入用户名");
        Scanner scanner = new Scanner(System.in);
        String name = scanner.nextLine();
        System.out.println("请输入密码");
        Scanner pass = new Scanner(System.in);
        String password = pass.nextLine();
        if (name.equals(names.get(0)) && password.equals(pwds.get(0))) {
            System.out.println("欢迎您，管理员");
        } else if (names.contains(name) && !pwds.contains(password)) {
            System.out.println("密码错误");
            enter();
        } else if (names.contains(name) && pwds.contains(password)) {
            System.out.println("欢迎您，" + name);
        } else {
            System.out.println("该账户未注册，请先注册");
        }
    }

    static void login() {
        System.out.println("请输入用户名");
        Scanner scanner = new Scanner(System.in);
        String name = scanner.nextLine();
        System.out.println("请输入密码");
        Scanner pass = new Scanner(System.in);
        String password = pass.nextLine();
        if (names.contains(name)) {
            System.out.println("该用户名已注册");
            login();
        } else {
            names.add(name);
            pwds.add(password);
            System.out.println("注册成功");
        }
    }
    static void check() {
        if (names.size() == 1) {
            System.out.println("使用人数为0");
        } else {
            System.out.print("当前系统注册人数为：");
            System.out.println(names.size() - 1);
        }
    }
}