package paiza;

/*
 *  1到10个数字 排成三角形 三边上的数字加起来的和都相等
 *  的三角形的全部排法
 *
 */

public class Main {
	
	static int result = 0;

	public static void main(String[] args) {
		int[] buf = new int[] { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 };
		permutation(buf, 0, 9);
		System.out.println(result);
	}


	public static void permutation(int[] buf, int start, int end) {
		if (start == end) {
				int A = buf[0] + buf[1] + buf[2] + buf[3];
				int B = buf[3] + buf[4] + buf[5] + buf[6];
				int C = buf[0] + buf[8] + buf[7] + buf[6];
				if (A == B && A == C) {
					result++;
				}
		} else {
			for (int i = start; i <= end; i++) {
				int temp = buf[start];
				buf[start] = buf[i];
				buf[i] = temp;
				permutation(buf, start + 1, end);
				temp = buf[start];
				buf[start] = buf[i];
				buf[i] = temp;
			}
		}
	}
}
