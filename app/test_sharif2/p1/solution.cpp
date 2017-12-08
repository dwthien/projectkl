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
int gt(int n){
	int kq = 1;
	while (n){
		kq*=n;
		n--;
	}
	return kq;

}
int main (){
	int m, n;
	cin >> m >> n;
	int s = sum(n);
	for (int i = 1; i < m; i++){
		s = sum(s);
	}
	cout << gt(s);
	return 0;
}
