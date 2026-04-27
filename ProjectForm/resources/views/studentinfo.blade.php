<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    form {
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 400px;
    }
    
    form h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }
    
    input[type="text"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 2px solid #e0e0e0;
        border-radius: 5px;
        font-size: 14px;
        transition: border-color 0.3s;
    }
    
    input[type="text"]:focus {
        outline: none;
        border-color: #667eea;
        box-shadow: 0 0 5px rgba(102, 126, 234, 0.3);
    }
    
    input[type="submit"] {
        width: 100%;
        padding: 12px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    
    input[type="submit"]:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    }
</style>

<form method="POST" action="stdsubmit">
    @csrf
    <h2>Student Registration</h2>
    <input type="text" name="name" placeholder="Full Name" value="{{ old('name')}}"><br>
    @error('name')
        <div style="color: red; margin-bottom: 10px;">{{ $message }}</div>
    @enderror
    <input type="text" name="course" placeholder="Course" value="{{ old('course')}}"><br>
    @error('course')
        <div style="color: red; margin-bottom: 10px;">{{ $message }}</div>
    @enderror
    <input type="text" name="email" placeholder="Email" value="{{ old('email')}}"><br>
    @error('email')
        <div style="color: red; margin-bottom: 10px;">{{ $message }}</div>
    @enderror
    <input type="text" name="phone" placeholder="Phone" value="{{ old('phone')}}"><br>
    @error('phone')
        <div style="color: red; margin-bottom: 10px;">{{ $message }}</div>
    @enderror
    <input type="submit" name="btn">

    @isset($success)
        <div style="color: green; margin-top: 20px;">{{ $success }}</div>
    @endisset

</form>