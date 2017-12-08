#include <iostream>
using namespace std;
int sum (int n){
	int kq = 0;
	while(n) {
		kq += n%10;
		n/=10;
	}
	return kq;

}
int main (){
	int n, max = 0;

	cin >> n;
	for (int i = 0; i < n; i++){
		int a;
		cin >> a;
		if (sum(a) > sum(max)) max = a;
	}

	cout << max;
	return 0;
}
