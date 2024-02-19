package queue;

public class Queue {
    
    int f;
    int r;
    int capacity;
    int currentSize;
    int qArr[];
    
    public Queue(int arrSize) {
            capacity = arrSize;
            f = 0;
            r = 1;
            currentSize = 0;
            qArr = new int[arrSize];
    }

    public void enqueue(int data) {
        if (isFull())
            System.out.println("Queue telah penuh");
        
        else {
            r++;
            if(r==capacity)
                r=0;
            
            qArr[r] = data;
            currentSize++;
            System.out.println(data + " telah ditambah ke dalam Queue");
        }
    }

    public void dequeue() {
        if (isEmpty())
            System.out.println("Queue masih kosong");
        
        else {
            f++;
            if(f==capacity){
            System.out.println(qArr[f-1] + " telah dibuang");
        f=0;
        }
        
        else
        System.out.println(qArr[f-1] + " telah dibuang");

        currentSize--;
    }}
    
    public boolean isFull() {
        if(currentSize == capacity)
            return true;
        else
            return false;
}

    public boolean isEmpty() {
        if(currentSize == capacity)
            return true;
        else
            return false;
}

public static void main(String[] args) {
    Queue que = new Queue(5);

    que.enqueue(6);
    que.dequeue();
    que.enqueue(3);
    que.enqueue(99);
    que.enqueue(56);
    que.dequeue();
    que.enqueue(43);
    que.dequeue();
    que.enqueue(89);
    que.enqueue(77);
    que.dequeue();
    que.enqueue(32);
    que.enqueue(232);
    que.dequeue();
}
}
