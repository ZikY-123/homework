from matplotlib import pyplot as plt, font_manager

# 设置图形大小
fig = plt.figure(figsize=(18, 8), dpi=80)
# 设置字体
font = font_manager.FontProperties(fname="C:\Windows\Fonts\msyh.ttc")
x = range(11, 31)
# 数据
y_1 = [1, 0, 1, 1, 2, 4, 3, 2, 3, 4, 4, 5, 6, 5, 4, 3, 3, 1, 1, 1]
y_2 = [1, 0, 3, 1, 2, 2, 3, 3, 2, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1]
# 绘图
plt.plot(x, y_1, label="自己")
plt.plot(x, y_2, label="同桌")
# 设置横轴刻度
plt.xticks(x, [f"{i}岁" for i in range(11, 31)], fontproperties=font)
# 横轴
plt.xlabel('年龄', fontproperties=font)
# 纵轴
plt.ylabel('交往的女朋友个数', fontproperties=font)
# 图表标题
plt.title('11~30岁交往的女朋友个数', fontproperties=font)
# 绘制网格 alpha:透明度（0~1）
plt.grid(alpha=0.5, linestyle='--', color='blue', linewidth=0.5)
# 添加图例
plt.legend(prop=font, loc=4)
# 展示
plt.show()
