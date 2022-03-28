from matplotlib import pyplot as plt
import random
fig = plt.figure(figsize=(120, 8), dpi=80)  # 通过实例化一个figure并且传入参数，能够在后台自动使用该figure实例，在图像模糊时可以传入dpi参数，让图片更加清晰
x = range(1, 121)  # 数据在X轴的位置，是一个可迭代对象
y = [random.randint(20, 35) for i in range(120)]  # 数据在Y轴的位置，是一个可迭代对象
# X轴和Y轴的数据一起组成了所有要绘制出的坐标
# 分别是(2,15),(4,13),(6,14.5),(8,17)
plt.plot(x, y)  # 传入X和Y，通过plot绘制出折线图
plt.xticks(x)  # 设置X的刻度
plt.yticks(y)  # 设置Y的刻度
# plt.savefig("./test.png")  # 保存图片
# 可以保存为svg矢量图格式，放大不会有锯齿
plt.show()  # 绘制图形

