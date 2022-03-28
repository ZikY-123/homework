# 从键盘录入一个成绩，100~90为A级；89~70为B级；69~60为C级，其余为D级，超出范围报错
a = int(input("请输入成绩"))
if 100 >= a >= 90:
    print(str(a) + "分为A级")
elif 89 >= a >= 70:
    print(str(a) + "分为B级")
elif 79 >= a >= 70:
    print(str(a) + "分为C级")
elif 69 >= a >= 60:
    print(str(a) + "分为D级")
elif a < 0:
    print("数据无效，请重新输入")
elif a > 100:
    print("数据无效，请重新输入")
else:
    print(str(a) + "分为E级")
