# 从键盘录入一个整数，判断输入的数是奇数还是偶数
a = input("请输入一个整数")
if int(a) % 2 == 0:
    print(str(a) + "是偶数")
else:
    print(str(a) + "是奇数")
